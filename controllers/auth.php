<?php
	require_once('controllers/db.php');
	require_once('models/authModel.php');
	require_once('controllers/authView.php'); 
	
	$model = new authModel(mydns, myuser, mypass);
	$view = AuthView();
	
	$username = (isset($_POST['username']))? trim($_POST['username']): '';
	$password = (isset($_POST['Password']))? $_POST['Password'] : '';
	
	$contentPage = 'form';
	$user= array();
	
	session_start();
		if(!empty($_SESSION['userInfo'])){
			$contentPage = 'success';
			$user= $_SESSION['userInfo'];
			}//end of conditional block
		
		if(!empty($username) && !empty($password)){
			$user = $model->getUserByNamePass($un, $pw);
				if(is_array($user)){
					$contentPage = 'success';
					$_SESSION['userInfo'] = $user;
					}//end of inner conditional

			}//end of conditional block
			
?>