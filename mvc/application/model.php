<?php 

class Model extends DataBase {

	public function __construct() {
		parent::__construct('localhost', 'root', 'admin', 'mcds-1747586');
		parent::connection();
		//parent::disconnection();
	}

	public function getAllUsers() {
		try {
			$sql = "SELECT * FROM users";
			$stm = $this->conx->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();

		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

	public function getInfo() {
		return array(
			'firstName'   => 'Jeremias',
			'lastName'    => 'Springfield',
			'email'       => 'jeremias@gmail.com',
			'phoneNumber' => 3120909900
		);
	}

} 


?>