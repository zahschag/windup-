<?php

	require_once('db.php');
	require_once('../models/tasksModel.php');
	require_once('taskView.php'); 
	
	$model = new taskModel(mydns, myuser, mypass);
	$view = new taskView();
	$rows = $model->getTasksList();
	$view->showHead('My Task Details | WindUp! Tasks');
	$view->showDetails($rows);
	$view->showFoot();

?>