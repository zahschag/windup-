<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	class TaskView{
		public function showHead($pageTitle = ''){
			include "views/header.inc";
			}
		public function showFoot(){
			include "views/footer.inc";
			}
		public function showTasks($rows){
			include "views/taskList.inc";
			}
		public function showDetails($rows){
			include "views/taskDetails.inc";
			}
		public function showMain(){
			include "views/mainIndex.inc";
			}
		};


?>