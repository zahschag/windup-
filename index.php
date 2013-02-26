<?php
	
//Call database, model and view
	require_once('db.php');
	require_once('../models/tasksModel.php');
	require_once('taskView.php'); 
	
	$model = new TaskModel(mydns, myuser, mypass);
	$rows = $model->getTasksList();
	$view = new TaskView();
	$view->showHead('Wind up Tasks!');
	$view->showFoot();
?>
