<?php
require_once '../src/db.php';
require_once '../src/session.php';
session_start();
if(isset($_SESSION['auth'])){
	if($_SESSION['auth']->is_auth()){

	} else {
		unset($_SESSION['auth']);
		header('location:index.php');
		die();	
	}	
}