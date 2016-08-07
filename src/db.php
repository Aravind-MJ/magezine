<?php
class SafeDb{
	private $host = 'localhost';
	private $user = 'root';
	private $password = 'admin';
	private $database = 'magezine';
	private $link;
	public $error;
	public $count;

	function SafeDb(){
		if($link = mysqli_connect($this->host,$this->user,$this->password,$this->database)){			
			$this->link = $link;
		} else {
			$this->error = 'Database Connection failed';
			return false;
		}
	}

	function select($table,$condition=null){
		$query = sprintf('SELECT * FROM %s',$table);
		if($condition!=null){
			if(is_array($condition)){
				$i=0;
				foreach ($condition as $key => $value) {
					if($i==0){
						$query .= ' WHERE';
					}
					if($i!=0){
						$query .= ' AND';
					}
					$query .= ' '.$key."='".$value."'";
					$i++;
				}
			} else {
				$query .= sprintf(' WHERE %s',$condition);	
			}			
		}

		if($result = mysqli_query($this->link,$query)){
			$this->count = mysqli_num_rows($result);
			return $result;
		} else {
			$this->error = mysqli_error($this->link);
			//$this->error .= '----'.$query;
			return false;
		}
	}

	function update($table,$data,$condition){
		if(is_array($data) AND sizeof($data)>0){
			$query = sprintf("UPDATE %s SET ",$table);
			$i=0;
			foreach ($data as $key => $value) {
				if($i==0){
					$query .= sprintf("%s='%s'",$key,$value);
				} else {
					$query .= sprintf(",%s='%s'",$key,$value);
				}
				$i++;
			}
			if(is_array($condition)){
				$i=0;
				foreach ($condition as $key => $value) {
					if($i==0){
						$query .= ' WHERE';
					}
					if($i!=0){
						$query .= ' AND';
					}
					$query .= ' '.$key."='".$value."'";
					$i++;
				}
			} else {
				$query .= sprintf(' WHERE %s',$condition);	
			}
			if(mysqli_query($this->link,$query)){
				//$this->error .= '----'.$query;
			} else {
				$this->error = mysqli_error($this->link).'-'.$query;
			}
		} else {
			$this->error = "Invalid parameters";
			return false;
		}
	}

	function get_link(){
		return $this->link;
	}
}