<?php
include('db.php');
class users extends db{
	public function getUsers(){
		$sql ='SELECT * FROM users';
		$users = $this->query($sql);
		return $users;
	}
	public function delete ($paramas){
		$sql='....cau sql...';
		$this->query($sql);
	}
	public function insert ($paramas){
		$sql='....cau sql...';
		$this->query($sql);
	}
	public function update ($paramas){
		$sql='....cau sql...';
		$this->query($sql);
	}
}
?>
