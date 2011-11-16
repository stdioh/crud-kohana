<?php defined('SYSPATH') or die('No direct script access.');

/*
	Klasa do obslugi bazy danych, wyciagajaca kolumny i takie tam..
*/

class Crud
{
	public $_TABLE 	= '';

	public $_PATH	= '/home/hawk/public_html/crud-kohana/application';

	// post-data
	public $_DATA 	= array();

	public function set_data($data)
	{
		$this->_DATA = $data;
		$this->set_table($this->_DATA['table_name']);
		return $this;
	}

	public function set_table($tablename)
	{
		$this->_TABLE = $tablename;
		return $this;
	}

	public function get_path()
	{
		return $this->_PATH;
	}

	public function get_table_singular()
	{
		return substr($this->_DATA['table_name'],0,(strlen($this->_DATA['table_name'])-1));
	}

	public function get_columns()
	{
		return Database::instance()->list_columns($this->_TABLE);
	}

	/*
		@desc:	metoda zwraca posortowane nazwy tabel
	*/
	public function get_sort_tables()
	{
		// wylistowanie tabel w poprawnej formie
		$result = array();
		$tables = Database::instance()->list_tables();

		foreach($tables as $table_name)
			$result[$table_name] = $table_name;

		return $result;
	}

	public function create_file($data,$filename)
	{
		if(!is_dir($this->get_path().'/classes/controller/admin/'))
			mkdir($this->get_path().'/classes/controller/admin/',0777, true);

		$fp = fopen($this->_PATH.$filename.'.php', "w");
		flock($fp, 2);
		fwrite($fp, $data);
		flock($fp, 3);
		fclose($fp); 		
	}

	public function model_relation_has_many()
	{		
		return "protected \$_has_many = array('".$this->_DATA['relation_table']."' => array());";
	}

	public function model_relation_has_one()
	{		
		return "protected \$_has_one = array(
			'".$this->_DATA['relation_table']."' => array(
				'foreign_key' => '".$this->_DATA['relation_field']."',
			),
		);";
	}

	public function model_relation_belongs_to()
	{		
		return "protected \$_belongs_to = array(
			'".$this->_DATA['relation_table']."' => array(
				'foreign_key' => '".$this->_DATA['relation_field']."',
			),
		);";
	}

	public function model_format()
	{
		$relation = '';
		if(isset($this->_DATA['relation_type']))
		{
			$relation_type = 'model_relation_'.$this->_DATA['relation_type'];
			$relation = $this->$relation_type();
		}

		$format = "
<?php defined('SYSPATH') or die('No direct script access.');
			 
class Model_".ucfirst($this->get_table_singular())." extends ORM {
	".$relation."
}

?>";
		return $format;
	}

	public function create_model()
	{
		// ujeb plural
		$filename = $this->get_table_singular();
		$this->create_file($this->model_format(),'/classes/model/'.$filename);	
	}

	public function controller_action_index()
	{
		$table_singular	= $this->get_table_singular();
		$columns 		= $this->get_columns();

		$content = "	public function action_index()\r\n";
		$content .= "	{\r\n";
		$content .= "		\$".$table_singular." = ORM::factory('".$table_singular."')->find_all();\r\n";

		// main loop view data
		$content .= "		\$content = '';\r\n\r\n";
		$content .= "		foreach(\$".$table_singular." as \$item) {\r\n";
		$content .=  '			$'.$table_singular.'_item = View::factory(\'admin/'.$table_singular.'/'.$table_singular."_item');\r\n";

		foreach($columns as $field)
		{
			if(isset($this->_DATA[$field['column_name'].'_set']) || ($field['column_name'] == 'id'))
				$content .= '			$'.$table_singular.'_item->'.$field['column_name'].' = $item->'.$field['column_name'].";\r\n";
		}

		$content .= '			$content .= $'.$table_singular."_item;\r\n";
		$content .= "		}\r\n\r\n";

		$content .= '		$'.$table_singular.'_data = View::factory(\'admin/'.$table_singular.'/'.$table_singular."_data');\r\n";
		$content .= '		$'.$table_singular."_data->data = \$content;\r\n\r\n";
		$content .= "		\$this->template->data = \$".$table_singular."_data;";

		$content .= "		\r\n}";

		return $content;
	}

	public function controller_action_add()
	{
		$table_singular	= $this->get_table_singular();
		$columns 		= $this->get_columns();
		
		$content  = "	public function action_add()\r\n";
		$content .= "	{\r\n";
		$content .= "		\$".$table_singular."_form = View::factory('admin/".$table_singular."/".$table_singular."_form');\r\n";
		$content .= "	\$".$table_singular."_form->action = 'create';\r\n";
		foreach($columns as $field)
		{
			$content .= "	\$".$table_singular."_form->".$field['column_name']." = '';\r\n";
		}
		$content .= "		\$this->template->data = \$".$table_singular."_form;\r\n}\r\n";

		return $content;
	}

	public function controller_action_create()
	{
		$table_singular = $this->get_table_singular();

		$content  = "	public function action_create()\r\n";
		$content .= "	{\r\n";
		$content .= "		if(\$_POST)\r\n";
		$content .= "		{\r\n";
		$content .= "			\$".$table_singular." = ORM::factory('".$table_singular."');\r\n";
		$content .= "			\$".$table_singular."->values(\$_POST);\r\n";
		$content .= "			\$".$table_singular."->save();\r\n";
		$content .= "			\$this->request->redirect('/index.php/admin/".$table_singular."');\r\n";
		$content .= "		}\r\n}\r\n";

		return $content;
	}

	public function controller_action_edit()
	{
		$columns = $this->get_columns();
		$table_singular = $this->get_table_singular();

		$content  = "	public function action_edit()\r\n";
		$content .= "	{\r\n";
		$content .= "		\$id = \$this->request->param('id');\r\n";
		$content .= "		if(!empty(\$id))\r\n{\r\n";
		$content .= "			\$".$table_singular."_form = View::factory('admin/".$table_singular."/".$table_singular."_form');\r\n";
		$content .= "			\$".$table_singular."_form->action = 'update';\r\n";
		$content .= "			\$".$table_singular." = ORM::factory('".$table_singular."',\$id);\r\n";

		foreach($columns as $field)
		{
			if($field['column_name'] == 'id')
				$content .= "			\$".$table_singular."_form->hidden_".$field['column_name']." = \$".$table_singular."->".$field['column_name'].";\r\n";
			else
				$content .= "			\$".$table_singular."_form->".$field['column_name']." = \$".$table_singular."->".$field['column_name'].";\r\n";		
		}
		$content .= "			\$this->template->data 	= \$".$table_singular."_form;\r\n";
		$content .= "		\r\n}\r\nelse\r\n";
		$content .= "			\$this->request->redirect('/index.php/admin/".$table_singular."');\r\n}\r\n";	
		
		return $content;
	}

	public function controller_action_update()
	{
		$table_singular = $this->get_table_singular();

		$content  = "	public function action_update()\r\n";
		$content .= "	{\r\n";
		$content .= "		if(\$_POST && !empty(\$_POST['record']))\r\n";
		$content .= "		{\r\n";
		$content .= "			\$".$table_singular." = ORM::factory('".$table_singular."', \$_POST['record']);\r\n";
		$content .= "			\$".$table_singular."->values(\$_POST);\r\n";
		$content .= "			\$".$table_singular."->save();\r\n";
		$content .= "			\$this->request->redirect('/index.php/admin/".$table_singular."');\r\n";
		$content .= "		}\r\n}\r\n";

		return $content;
	}

	public function controller_action_delete()
	{
		$table_singular = $this->get_table_singular();

		$content  = "	public function action_delete()\r\n";
		$content .= "	{\r\n";
		$content .= "		\$id = \$this->request->param('id');\r\n";
		$content .= "		if(!empty(\$id))\r\n{\r\n";
		$content .= "			\$".$table_singular." = ORM::factory('".$table_singular."', \$id);\r\n";
		$content .= "			\$".$table_singular."->delete();\r\n}\r\n";
		$content .= "			\$this->request->redirect('/index.php/admin/".$table_singular."');\r\n";
		$content .= "		}\r\n";

		return $content;		
	}

	public function controller_format()
	{
		$controller = $this->get_table_singular();

		return "
<?php defined('SYSPATH') or die('No direct script access.');

/*
	@desc:	CRUD Controller	
*/

class Controller_Admin_".ucfirst($controller)." extends Controller_Admin_Home 
{\r\n
	public \$template = 'admin/".$controller."/index';\r\n

\r\n\r\n".$this->controller_action_index()."
\r\n\r\n".$this->controller_action_add()."
\r\n\r\n".$this->controller_action_create()."
\r\n\r\n".$this->controller_action_edit()."
\r\n\r\n".$this->controller_action_update()."
\r\n\r\n".$this->controller_action_delete()."

\r\n\r\n}\r\n?>";
	
	}

	public function create_controller()
	{
		$filename = $this->get_table_singular();
		$this->create_file($this->controller_format(),'/classes/controller/admin/'.$filename);
	}

	public function view_index_data()
	{
		$columns = $this->get_columns();		
		$table_singular = $this->get_table_singular();

		$rows = '';
		foreach($columns as $field)
		{
			if(isset($this->_DATA[$field['column_name'].'_set']) || ($field['column_name'] == 'id'))
				$rows .= '<th scope="col">'.$field['column_name']."</th>\r\n";
		}

		return "<table class=\"table-a\" summary=\"Table\">
						<thead>
							<tr>
								<th scope=\"col\" class=\"chb\"><input class=\"chall\" type=\"checkbox\" /></th>
									".$rows."
								<th scope=\"col\" style=\"width: 65px;\">opcje</th>
							</tr>
						</thead>
						
						<tbody>
							<?php echo \$data; ?>
						</tbody>
					</table>
					
					<div class=\"tab-bottom-menu\">
						<h4>Nowy rekord:</h4>
						
						<ul>
							<li><a href=\"<?php echo URL::site('admin/".$table_singular."/add'); ?>\" class=\"btn btn-gray\">Dodaj</a></li> 
						</ul>		
					</div>";
	}

	public function view_index_item()
	{
		$columns = $this->get_columns();		
		$table_singular = $this->get_table_singular();

		$rows = '';
		foreach($columns as $field)
		{
			if(isset($this->_DATA[$field['column_name'].'_set']) || ($field['column_name'] == 'id'))
				$rows .= "<td><?php echo $".$field['column_name']."; ?></td>\r\n";
		}		

		return "			<tr>
								<td><input type=\"checkbox\" /></td>
										".$rows."
								<td>
									<a href=\"<?php echo URL::site('admin/".$table_singular."/edit').'/'.\$id; ?>\" class=\"table-icon edit\" title=\"Edytuj\">edytuj</a>
									<a href=\"#\" id=\"delete-item\" rel=\"delete\" module=\"".$table_singular."\" item=\"<?php echo \$id; ?>\" class=\"table-icon delete\" title=\"Usuń\">usuń</a>
								</td>
							</tr>
		";	
	}

	public function view_form()
	{
		$columns = $this->get_columns();
		$table_singular = $this->get_table_singular();

		$rows = '';
		foreach($columns as $field)
		{
			if($field['column_name'] != 'id')
			{
				// kontrolka w formularzu
				$control = isset($this->_DATA[$field['column_name'].'_control']) ? $this->_DATA[$field['column_name'].'_control'] : 'input';

				$rows .= "
					'<div class=\"ctrlHolder\">'.
						Form::label('".$field['column_name']."', __('".$field['column_name']."').':').
						Form::".$control."('".$field['column_name']."',\$".$field['column_name'].",array('class'=>'textInput required')).'<br />'.
					'</div>'.
				";
			}
		}	

		return "
<?php
		echo  Form::open('/admin/".$table_singular."/'.\$action, array('class'=>'uniForm', 'id' => 'validationForm')).
		
		Form::hidden('record',isset(\$hidden_id) ? \$hidden_id : '').
		'<fieldset class=\"inlineLabels\">'.
				".$rows."
			'<div class=\"buttonHolder\">'.
				Form::button('submit', __('Zapisz'),array('class'=>'primaryAction')).
				Form::close().
			'</div>'.

		'</fieldset>';
?>	
		";		
	}

	public function create_view()
	{		
		$table_singular = $this->get_table_singular();
		
		$data = $this->view_index_data();
		$item = $this->view_index_item();
		$form = $this->view_form();
		
		if(!is_dir($this->get_path().'/views/admin/'.$table_singular))
			mkdir($this->get_path().'/views/admin/'.$table_singular,0777, true);

		copy($this->get_path().'/views/crud/index_template.php', $this->get_path().'/views/admin/'.$table_singular.'/index.php');

		$this->create_file($data,'/views/admin/'.$table_singular.'/'.$table_singular.'_data');
		$this->create_file($item,'/views/admin/'.$table_singular.'/'.$table_singular.'_item');
		$this->create_file($form,'/views/admin/'.$table_singular.'/'.$table_singular.'_form');	
	}
}
