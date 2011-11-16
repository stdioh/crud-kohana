
<?php defined('SYSPATH') or die('No direct script access.');

/*
	@desc:	CRUD Controller	
*/

class Controller_Admin_Member extends Controller_Admin_Home 
{

	public $template = 'admin/member/index';




	public function action_index()
	{
		$member = ORM::factory('member')->find_all();
		$content = '';

		foreach($member as $item) {
			$member_item = View::factory('admin/member/member_item');
			$member_item->id = $item->id;
			$member_item->name = $item->name;
			$member_item->data = $item->data;
			$member_item->age = $item->age;
			$content .= $member_item;
		}

		$member_data = View::factory('admin/member/member_data');
		$member_data->data = $content;

		$this->template->data = $member_data;		
}


	public function action_add()
	{
		$member_form = View::factory('admin/member/member_form');
	$member_form->action = 'create';
	$member_form->id = '';
	$member_form->name = '';
	$member_form->data = '';
	$member_form->age = '';
		$this->template->data = $member_form;
}



	public function action_create()
	{
		if($_POST)
		{
			$member = ORM::factory('member');
			$member->values($_POST);
			$member->save();
			$this->request->redirect('/index.php/admin/member');
		}
}



	public function action_edit()
	{
		$id = $this->request->param('id');
		if(!empty($id))
{
			$member_form = View::factory('admin/member/member_form');
			$member_form->action = 'update';
			$member = ORM::factory('member',$id);
			$member_form->hidden_id = $member->id;
			$member_form->name = $member->name;
			$member_form->data = $member->data;
			$member_form->age = $member->age;
			$this->template->data 	= $member_form;
		
}
else
			$this->request->redirect('/index.php/admin/member');
}



	public function action_update()
	{
		if($_POST && !empty($_POST['record']))
		{
			$member = ORM::factory('member', $_POST['record']);
			$member->values($_POST);
			$member->save();
			$this->request->redirect('/index.php/admin/member');
		}
}



	public function action_delete()
	{
		$id = $this->request->param('id');
		if(!empty($id))
{
			$member = ORM::factory('member', $id);
			$member->delete();
}
			$this->request->redirect('/index.php/admin/member');
		}




}
?>