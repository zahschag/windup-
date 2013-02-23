<?php
	require_once('db.php');
	require_once('../models/tasksModel.php');
	require_once('taskView.php'); 
	
	$model = new TaskModel(mydns, myuser, mypass);
	$rows = $model->newUser();
	
	$view = new SignUp();//Calls the sign up view in the views folder
	$view->showHead('Sign Up | Wind up Tasks!');
	$view->signup();
	$view->showFoot();
	


?>