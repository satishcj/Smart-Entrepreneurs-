
<?php
//Admin model
class AdminModel extends Model{

	
	public function login(){
		
		
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		//$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM admin WHERE username = :username AND password = :password');
			$this->bind(':username', $post['username']);
			$this->bind(':password',  $post['password']);
			
			//$row = $this->single();
			//$row = $this -> fetch();
			
			$row = $this ->resultSet();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"name" =>	$row['username']				
				);
				header('Location: '.ROOT_URL.'shares');
				//changes
				//header('Location: '.ROOT_URL.'products');
			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
		}
		return;
	}
	
	
	
}

