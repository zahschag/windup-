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
/*---------------------------------READ FUNCTIONS -------------------------------*/	
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
			echo "Query Failed";
			}
			return array();
		}
/*-------------------------Task create function ------------------------------- */
public function createNewTask($taskTitle, $task){
	$statement = $this->db->prepare("
		INSERT INTO `tasks`(`taskTitle`, `task`)
		VALUES(:taskTitle, :task)
	");
	try{
		if($statement->execute(array(':taskTitle'=> $taskTitle, ':task'=> $task))){
			$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
			return $rows;
			
		}//end of try
	}
	catch(\PDOException $l){
			echo "Query Failed";
		}
}//end of create function
/*-------------------------Task Update function ------------------------------- */
public function updateTask($id, $task, $priority){
$statement = $this->db->prepare("
		UPDATE 'tasks' set
			`task` = :task,
			`priority` = :priority
		WHERE `taskId` = :id
	");
	try{
		if($statement->execute(array(':id'=>$id, ':task'=>$task, ':priority'=>$priority))){
			$rows = $statement->fetchAll(\PDO:: FETCH_ASSOC);
			return $rows;
		}//end of try
	}
	catch(\PDOException $t){
		echo "Query Failed";
	}//end of catch
}//end of update function

/*-------------------------Task delete function ------------------------------- */
public function deleteTask($id){
	$statement = $this->db->prepare("
		DELETE FROM `tasks`
		WHERE 'taskId' = :id
		");
	try{
		if($statement->execute(array(':id'=>$id,))){
			$rows = $statement->fetchAll(\PDO:: FETCH_ASSOC);
			return $rows;
		}//end of try
	}
	catch(\PDOException $t){
		echo "Query Failed";
	}//end of catch
}//end of Delete function
/*---------------------------------------User functions ---------------------------------------------*/

	/*-------------------Create New user function-------------------------*/
	public function newUser(){
		$statement = $this->db->prepare("
			INSERT INTO `users`(`user_id`, `user_fullname`, `lastname`, `email`, `user_name`, `user_password`, `user_salt`, `userStatus`, `userType`) 
			VALUES (:id, :name, :lastname, :email, :user, :pass, :salt, :status, :utype )
		");
		try{
			if ($statement->execute(array(':name'=> $name, ':lastname'=>$lastname,'$email'=>$email, ':user'=> $username, ':pass'=> $password, ':salt'=>$salt, ':status'=>$status, ':utype'=>$utype))){
				$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
				return $rows;
			}//conditional
		}//try
		catch(\PDOException $l){
			echo "Query Failed";
		}//catch
	}
	public function updatePassword($id, $password){
		$statement = $this->db->prepare("
		UPDATE `users` set
			`password` = :password,
		WHERE `userId` = :id
		");
			try{
				if($statement->execute(array(":id"=> $id, ":password"=> $password))){
					$rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
					return $rows;
					}//conditional
			}//try
		catch(\PDOExeption $l){
			echo "Query Failed";
			}//catch
	}
}
?>