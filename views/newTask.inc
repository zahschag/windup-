<div data-role="page" data-theme="g">
	<a href="../index.php" data-role="button" data-icon="home" data-iconpos="notext" data-inline="true" id="homeIcon">Home</a>
<div data-role="header">
		<h1>New task</h1>
</div>

<div data-role="content">

	<form action="?" method="POST">
		<label for="title">Title</label>
			<input data-role="input" type="text" name="title" id="title" maxlength="20" size="20"/><br/> <br/>
	
		<label for="task">Task</label>
			<input data-role="input" class="newForm" type="text" name="task" id="task" maxlength="350" size="350"/>
	
		<label for="taskType">Type</label><br/><br/>
			<input data-role="input" class="newForm" type="text" name="username" id="username" maxlength="20" size="20"/>

	<input type="submit" data-role="Submit"/>
	
	</form>
</div>
</div>