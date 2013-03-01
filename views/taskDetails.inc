<a href="../index.php" data-role="button" data-icon="home" data-iconpos="notext" data-inline="true" id="homeIcon">Home</a>
<?php
	foreach($rows as $num => $row){
		echo"<p>Task ${row['task']}</p>
			<p>Details: ${row['details']}</p>
			<p>Priority: ${row['priority']}</p>
			<br /><a href='../index.php' data-role='button' data-icon='home' data-iconpos='notext' data-inline='true' id='homeIcon'>Home</a>";		
	}

?>