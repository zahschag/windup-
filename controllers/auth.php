<?php
	require_once('db.php');
	require_once('../models/authModel.php');
	require_once('authView.php'); 
	
	$model = new AuthModel(mydns, myuser, mypass);
	$view = new authView();
	
	$username = (isset($_POST['username']))? '' : strtolower(trim($_POST['username']));
	$password = (isset($_POST['Password']))? '' : trim( $_POST['Password']);
	
	$contentPage = 'form';
	$user= NULL;
	
	session_start();
		if(!empty($_SESSION['userInfo'])){
			$contentPage = 'success';
			$user= $_SESSION['userInfo'];
			}//end of conditional block
		
		if(!empty($username) && !empty($password)){
			$user = $model->getUserByNamePass($username, $password);
				if(is_array($user)){
					$contentPage = 'success';
					$_SESSION['userInfo'] = $user;
					}//end of inner conditional

			}//end of conditional block
$view->show('header');
$view->show($contentPage, $user);
$view->show('footer');
			
?>