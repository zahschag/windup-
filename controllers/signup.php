<?php
	require_once('db.php');
	require_once('../models/tasksModel.php');
	require_once('../controllers/taskView.php'); 
	require_once('../controllers/signUpview.php');
	
	$model = new TaskModel(mydns, myuser, mypass);
	$rows = $model->newUser('','','','');
	
	$view = new TaskView();//Calls the sign up view in the views folder
	$newTaskView = new signup();
	//$view->showHead('Sign Up | Wind up Tasks!');
	$newTaskView->showForm($rows);
	$view->showFoot();

?>