<?php
	require_once "src/db.php";
	require_once "src/session.php";	
	session_start();
	if(isset($_POST) AND empty($_SESSION['auth'])){
		$db = new SafeDb();
		$raw_username = $_POST['username'];
		$username = mysqli_real_escape_string($db->get_link(),filter_var($_POST['username'],FILTER_SANITIZE_STRING));
		$password = $_POST['password'];
		$result = $db->select('mag_users',array('username'=>$username));
		while($row = mysqli_fetch_assoc($result)){
			$user_id = $row['id'];
			if(password_verify($password,$row['password'])){
				$_SESSION['auth'] = new Session($row['id'],$row['name'],$row['role']);				
				break;
			}
		}
		if(empty($_SESSION['auth'])){
			$_SESSION['error'] = array(
				'message'=>'Incorrect Username or Password',
				'status'=>'danger'
				);
			$db->insert('login_log',array('user_id'=>$user_id,'used_username'=>$raw_username,'status'=>0));
			header("location:index.php");
			die();
		} else {
			$db->insert('login_log',array('user_id'=>$user_id));
			//echo $db->error; die();
			if($_SESSION['auth']->is_admin()){
				header("location:admin/home.php");
			} else {
				header("location:index.php");
			}	
		}		
	} else {
		header("location:index.php");
	}
?>