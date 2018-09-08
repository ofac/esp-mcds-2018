<?php 

class Controller {
	public $load;
	public $model;

	public function __construct() {
		$this->load  = new Load;
		$this->model = new Model;
		$this->home();
	}

	public function home() {
		//$data = $this->model->getInfo();
		$data = $this->model->getAllUsers();
		$this->load->view('home.php', $data);
	}

}

?>