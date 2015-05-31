<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	
	public $template = 'index';
	public $auto_render = TRUE;
	
	public function action_index(){
	
				$this->action_first();
				
/* 				if (isset($_POST["step"]) and $_POST["step"] >= 1 and $_POST["step"] <= 3 ) {

						$this->action_second();
				}else{
					
						$this->action_end();
				} */
		}

				
	public function action_first(){
				
				

					$view = View::Factory('first');
					$this->template->corpopagina = $view;
					$titulo1 = $this->request->post('titulo1');
					$view->set('titulo1',$titulo1);
					
							if (isset($_POST["submit"])){
								$this->action_second();
							}
				}
			
	public function action_second(){
	
					$titulo = '';
					$view = View::Factory('second');
					$this->template->corpopagina = $view;
					$titulo = $this->request->post('titulo');
					$view->set('titulo',$titulo);
							if (isset($_POST["submit2"] )){
								$this->action_third();
							}
			}	

	public function action_third(){
					
					$titulo = '';
					$view = View::Factory('third');
					$this->template->corpopagina = $view;
					$titulo = $this->request->post('titulo');
					$view->set('titulo',$titulo);
							if ( isset( $_POST["submit3"] )){
								$this->action_end();
							}
			}
			
			
			
	public function action_end(){
					
					$view = View::Factory('end');
					$this->template->corpopagina = $view;
					$titulo1 = $this->request->post('titulo1');
					$view->set('titulo1',$titulo1);
			}
			
	

	

}
