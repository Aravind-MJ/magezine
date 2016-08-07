<?php
	session_start();
	if(isset($_POST)){
		require_once "db.php";
		require_once "session.php";		
		$db = new SafeDb();
		$username = mysqli_real_escape_string($db->get_link(),$_POST['username']);
		$password = $_POST['password'];
		$result = $db->select('mag_users',array('username'=>$username));
		while($row = mysqli_fetch_assoc($result)){
			if(password_verify($password,$row['password'])){
				$_SESSION['auth'] = new Session($row['id'],$row['name'],$row['role']);
			}
		}
		if(empty($_SESSION['auth'])){
			$_SESSION['error'] = array(
				'message'=>'Incorrect Username or Password',
				'status'=>'danger'
				);
		}	
		if($_SESSION['auth']->is_admin()){
			header("location:admin/home.php");
		} else {
			header("location:index.php");
		}	
		
	} else {
		header("location:index.php");
	}
?>