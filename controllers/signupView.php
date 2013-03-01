<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	class signup{
		public function showHead($pageTitle = ''){
			include "../views/header.inc";
			}
		public function showFoot(){
			include "../views/footer.inc";
			}
		public function showForm($rows){
			include "../views/form.inc";
			}
	
		};
?>