
<div data-role="page" data-theme="g">

<div data-role="header"><h1>
	<a href="../index.php" data-role="button" data-icon="home" data-iconpos="notext" data-inline="true" id="homeIcon">Home</a>
		<h1>Sign Up</h1>
</div>

<div data-role="content">
	<form action="" method="POST">
	<label>Name<br/>
		<input type="text" name="fullname" id="name" maxlength="20"/>
	</label>	
	<label>Last Name<br/>
		<input type="text" name="lastname" id="lastname" maxlength="20"/>
	</label>
	<label>email<br/>
		<input type="text" name="email" id="email" maxlength="150"/>
	</label>
	<label>username<br/>
		<input type="text" name="username" id="username" maxlength="20"/>
	</label>
	<label>Password<br/>
		<input type="password" name="password" id="password" maxlength="20"/>
	</label><br/><br/>
	<input type="submit" value="Submit" class="blue-btn"/>
	</form>
</div>

</div>