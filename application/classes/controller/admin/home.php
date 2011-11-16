<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Home extends Controller_Home 
{
	public $template = 'admin/home/index';

	public function  __construct(Request $request, Response $response) 
	{
    	parent::__construct($request, $response);
	}
 
    public function before() 
	{
      	parent::before();

        if ($this->auto_render)
        {
            $this->template->admin_styles = array();
            $this->template->admin_scripts = array();
        }
    }
 
    public function after() 
	{
        if ($this->auto_render)
        {
                $styles = array(
                );
 
                $scripts = array(
						'system/media/admin/js/jquery-1.5.1.min.js',
						'system/media/admin/js/jquery-ui.min.js',
						'system/media/admin/js/jquery-crud.js',                 
				);
 
                $this->template->admin_styles = $styles;
                $this->template->admin_scripts = $scripts;
		}

        parent::after();
    }
 
    public function action_index() 
	{

    }

}
