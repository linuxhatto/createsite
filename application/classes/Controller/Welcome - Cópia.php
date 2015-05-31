<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	
	public $template = 'index';
	public $auto_render = TRUE;
	
	public function action_index()
	{
		 $username = '';
		 $view = View::Factory('body')->set('username',$username);
         $this->template->corpopagina = $view;
	}
	

	public function action_post(){
		$view = View::Factory('post');
		$this->template->corpopagina = $view;
		$username = $this->request->post('username');
		$view->set('username',$username);
		
		
			if (isset($_POST["step"]) and $_POST["step"] >= 1 and $_POST["step"] <= 3 ) {
			$step = $this->request->post('step');
			$view->set('step',$step);
			}else{
					
					$this->action_index();
				}
	}

	

	

} // End Welcome
