<?php
class Shops extends Controller{
	
	protected function index(){
		$viewmodel = new ShopsModel();
		$this->returnView($viewmodel->index(), true);
	}
	
}
