<?php
	
//Call database, model and view
	require_once('../controllers/db.php');
	require_once('../models/tasksModel.php');
	require_once('../controllers/newTaskView'); 
	
	$model = new TaskModel(mydns, myuser, mypass);
	$rows = $model->newTaskModel();
	$view = new newTaskView();
	$view->showHead('Add new task|Wind up Tasks!');
	$view->showFoot();
?>
