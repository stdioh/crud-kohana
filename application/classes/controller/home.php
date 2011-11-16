<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template 
{
	public $template = 'home/index';

	public function  __construct(Request $request, Response $response) 
	{
    	parent::__construct($request, $response);
	}
 
    public function before() 
	{
      	parent::before();
 
        if ($this->auto_render)
        {
            $this->template->title = '';
 
            $this->template->styles = array();
            $this->template->scripts = array();
        }
    }
 
    public function after() 
	{
        if ($this->auto_render)
        {
                $styles = array(
                );
 
                $scripts = array(
                );
 
                $this->template->styles = array_merge( $this->template->styles, $styles );
                $this->template->scripts = array_merge( $this->template->scripts, $scripts );
        }
        parent::after();
    }
 
    public function action_index() 
	{
		
	}
}
