<?php
	require_once('db.php');
	require_once('connect.php');
	require_once('../models/authModel.php');
	require_once('AuthView.php'); 
	
	$model = new AuthModel(mydns, myuser, mypass);
	$view = new AuthView();
	
	$username = $model->getUserByNamePass(isset($_POST['username'])) ? '' : strtolower(trim($_POST ['username']));
	$password = $model->getUserByNamePass(isset($_POST['password'])) ? '' : trim( $_POST['password']);
	
	$contentPage = 'form';
	$user= array();
	
		if(!empty($_SESSION['userInfo'])){
			$contentPage = 'success';
			$user= $_SESSION['userInfo'];
			}//end of conditional block
		
		if(!empty($un) && !empty($pw)){
			$user = $model->getUserByNamePass($un, $pw);
				if(is_array($user)){
					$contentPage = 'success';
					$_SESSION['userInfo'] = $user;
					}//end of inner conditional

			}//end of conditional block
$view->show('header');
$view->show($contentPage, $user);
$view->show('footer');
			
?>