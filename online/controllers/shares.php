<?php
class Shares extends Controller{
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Index(), true);
		
	}

	//adding product by admin
	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'shares');
		}
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->add(), true);
	}
	
	public function view(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->view(), true);
	}
	

}
