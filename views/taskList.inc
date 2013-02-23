<?php
	foreach($rows as $num => $row){
		$user_id = $row['taskId'];
		echo "<h3><a href=details.php?id=" .mysql_real_escape_string($user_id) ."</a></h3>"
		
		}
?>