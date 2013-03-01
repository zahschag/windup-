<?php
Class AuthModel{
		
	private $db;
	
	public function __construct($mydns, $myuser, $mypass){
		$this->db = new \PDO($mydns, $myuser, $mypass);
		$this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
	}//end of contruction function
	
	
	//un = username
	//pw = password
	/*-------------------------Get's the username and the password--------------------------*/
	public function getUserByNamePass($name, $pass){
		$stmt = $this->db->prepare("
			SELECT `user_id` AS id, `user_name` AS username, `user_fullname AS fullname
			FROM `users`
			WHERE(`user_name` = :user)
				AND(`user_pass` = :pass)
		");
		if($stmt -> execute(array(':user'=> $user, ':pass'=>$pass))){
			$rows = $stmt->fetchAll(\PDO::FETCH_ALL);
				if(count($rows)===1){
					return $rows[0];
					}//end of inner conditional
			}//end of confitional
			return FALSE;
		}//end of function
}//end of program
?>

