
<div data-role='page' data-theme='g'>
<?php
	foreach($rows as $num => $row){
		$taskId = $row['taskId'];
		echo "<h3><a href=../controllers/taskDetails.php?id=" .mysql_real_escape_string($taskId) ."</a></h3>";
		}
?>
</div>