<div data-role="page" data-theme="g">
<div data-role="header">
<a href="../index.php" data-role="button" data-icon="home" data-iconpos="notext" data-inline="true" id="homeIcon">Home</a>
		<h1>New task</h1>
</div>
<div data-role="content" data-theme="g">

	<form action="?" method="POST">
	
		<label for="title">Title</label><input data-role="input" type="text" name="title" id="title" maxlength="20" size="20"/><br/> <br/>
		<label for="task">Task</label><input data-role="input" type="text" name="task" id="task" maxlength="350" size="350"/><br/><br/><br/><br/>
	<input type="submit" value="Submit" class="blue-btn"/>
	</form>
</div>
</div>