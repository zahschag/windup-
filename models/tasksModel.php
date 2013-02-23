<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

class TaskModel{
	
	private $db;
	public function __construct($mydns, $myuser, $mypass){
		try{
			$this->db = new \PDO($mydns, $myuser, $mypass);
			
			}//try function
			catch(\PDOException $l){
				var_dump($l);
			}//catch function
		}//construct function
		
	public function getTasksList(){
		$statement = $this->db->prepare("
			SELECT taskId, taskTitle, task, taskType, priority, date
			FROM tasks
			order by priority, task
			limit 20
		");//Will select the tasks that are from the database the selection will be made from the tasks table
		try{
			if($statement->execute()){
				$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
				return $rows;
			}//conditional
		}
	catch(\PDOException $l){
		return array();
	}//catch		
		}//get task function
		
	public function getTasksDetails(){
		$statement = $this->db->prepare("
		SELECT taskId, taskTitle, task, taskType, priority, date
		FROM tasks
		WHERE taskId = :task_id
		");
		try{
			if ($statement->execute(array(":task_id"=>$id))){
				$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
				return $rows;	
			}//conditional
		}	//try
		catch(\PDOException $l){
			var_dump($l);
			}
			return array();
		}
		
	//Function that will insert new users into the database
	public function newUser(){
		$statement = $this->db->prepare("
		INSERT INTO users(user_fullname, lastname, user_name, user_password)
		VALUES(user_fullname = :fullname, lastname = :lastname, user_name = :username, user_password = :password)
		");
		try{
			if ($statement->execute(array(":fullname"=>$fullname, ":lastname"=>$lastname, ":username"=>$username,":password"=>$password))){
				$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
				return $rows;
			}//conditional
		}//try
		catch(\PDOException $l){
			var_dum($l);
		}//catch
	}
}
?>