<?php
	require_once('db.php');
	require_once('connect.php');
	require_once('../models/tasksModel.php');
	require_once('../controllers/taskView.php'); 
	require_once('../controllers/signUpview.php');
	
	$model = new TaskModel(mydns, myuser, mypass);
	$rows = $model->newUser();
	if(isset($_POST['name'], $_POST['lastname'], $_POST['username'], $_POST['password'])){
			$newTask = $model->createNewTask($_POST['name'], $_POST['lastname'], $_POST['username'], $_POST['password']);
		}//end of conditional
	$view = new TaskView();//Calls the sign up view in the views folder
	$newTaskView = new signup();
	$newTaskView->showForm($rows);
	$view->showFoot();

?>