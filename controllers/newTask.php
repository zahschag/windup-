<?php
	require_once('db.php');
	require_once('../models/tasksModel.php');
	require_once('newTasksView.php'); 
	
	$model = new taskModel(mydns,myuser,mypass);
	$view = new newTaskView();
	$contentPage = 'newTask';
		if(isset($_POST['taskTitle'],$_POST['task'],$_POST['taskType'])){
			$newTask = $model->createNewTask($_POST['taskTitle'],$_POST['task'],$_POST['taskType']);
			}//end of conditional
		$view->showHead('New Task!');
		$view->showForm($contentPage);
		$view->showFoot();
?>