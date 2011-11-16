<?php defined('SYSPATH') or die('No direct script access.');

// load main classes
require_once Kohana::find_file('libraries/', 'Crud');

class Controller_Crud extends Controller
{
	public function action_index()
	{
		$crud = new Crud;

		$main = View::factory('crud/index');
		$checkform 			= View::factory('crud/generator_checkform');
		$checkform->tables 	= $crud->get_sort_tables();
		$checkform->table_name = '';

		$main->form 		= $checkform;
		$main->fields 		= '';
		$this->response->body($main);
	}

	public function action_check()
	{
		$crud = new Crud;

		// glowny szablon oraz formularz dla generowanej tabeli
		$main 				= View::factory('crud/index');
		$checkform 			= View::factory('crud/generator_checkform');
		$checkform->tables 	= $crud->get_sort_tables();
		$main->form 		= $checkform; 

		// nazwa tabeli
		$tablename = $_POST['table_name'];
		$checkform->table_name = $tablename;

		$crud = new Crud;
		$data = $crud->set_table($tablename)->get_columns();

		$fields = '';
		foreach($data as $field)
		{
			if($field['column_name'] != 'id')
			{
				$record 				= View::factory('crud/generator_record');
				$record->type			= $field['type'];
				$record->column_name 	= $field['column_name'];
				$fields 				.= $record;
			}		
		}
		
		// caly content na stronke
		$form = View::factory('crud/generator_generateform');
		$form->data = $fields;
		$form->table_name = $tablename;

		$main->fields = $form;
		$this->response->body($main);
	}

	public function action_generate()
	{
		//print_r($_POST);
		//---------------------

		$crud = new Crud;
		$crud->set_data($_POST);
		$crud->create_model();
		$crud->create_view();
		$crud->create_controller();

		$this->request->redirect('/index.php/crud');
	}
}














