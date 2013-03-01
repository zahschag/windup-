<?php

Class AuthView{
	public function show($template, $data = array()){
		$templatePath="views/${template}.inc";
			if(file_exists($templatePath)){
				include $templatePath;
				}//end of conditional
		}//end of function
	}//end of class
?>