<?php
	require_once('db.php');
	require_once('../models/tasksModel.php');
	require_once('taskView.php');
	require_once('newTasksView.php'); 

	$model = new taskModel(mydns,myuser,mypass);
	$genView = new TaskView();
	$view = new newTaskView();
	$rows = $model->createNewTask('','','','', '');
		if(isset($_POST['taskTitle'], $_POST['task'], $_POST['taskType'], $_POST['priority'], $_POST['date'])){
			$newTask = $model->createNewTask($_POST['taskTitle'], $_POST['task'],$_POST['taskType'], $_POST['priority'],  $_POST['date']);
		}//end of conditional
		
		$genView->showHead('New Task!');
		$view->showForm($rows);
		$genView->showFoot('');
			
?>