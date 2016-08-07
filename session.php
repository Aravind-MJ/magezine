<?php
class Session{
	private $id;
	private $name;
	private $role;
	public $error;
 
	function Session($id,$name,$role){
		$this->id = gzencode($id);
		$this->name = gzencode($name);
		$this->role = gzencode($role);
	}

	function get_name(){
		return gzdecode($this->name);
	}

	function get_id(){
		return gzdecode($this->id);
	}

	function is_admin(){
		return (gzdecode($this->role) == 1)?true:false;
	}

	private function get_role(){
		return (gzdecode($this->role));	
	}

	function is_auth(){
		$db = new SafeDb();
		$db->select('mag_users',array('id'=>$this->get_id(),'name'=>$this->get_name(),'role'=>$this->get_role()));
		$this->error = $db->error;
		return ($db->count>0)?true:false;
	}

}