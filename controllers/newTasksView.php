<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	class newTaskView{
		public function showHead($pageTitle = ''){
			include "../views/header.inc";
			}
		public function showFoot(){
			include "../views/footer.inc";
			}
		public function showForm($rows){
			include "../views/newTask.inc";
			}
	
		};
?>