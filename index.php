<?php
	
//Call database, model and view
	require_once('controllers/db.php');
	require_once('models/tasksModel.php');
	require_once('controllers/mainView.php'); 
	require_once('controllers/btnViews.php');
	
	$model = new TaskModel(mydns, myuser, mypass);
	$rows = $model->getTasksList();
	$view = new MainView();
	$btnView = new BtnViews();
	$view->showHead('Wind up Tasks!');
	$btnView->showBtn();
	$view->showFoot();
?>
