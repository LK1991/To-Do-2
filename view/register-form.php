<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>
<li id = "home"><a href="<?php echo $path. "index.php" ?>">Home</a></li>

<h1 id = "form">Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>" id = "form">
	<div>
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div>
		<button type="submit" id = "submit">Submit</button>
	</div>
</form>