
<?php
	foreach($rows as $num => $row){
		echo"<p>Task ${row['task']}</p>
			<p>Priority: ${row['priority']}</p>
			<p>Details: ${row['details']}</p>
			
			<br /><a href='index.php'>Tasks</a>";
			
	}

?>