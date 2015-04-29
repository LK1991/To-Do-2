<?php
    // require a config.php file in the model folder
    // have access to the variables int the config.php file
    require_once(__DIR__ . "/../model/config.php");
    
?>
<head>
	<link rel="stylesheet" href="css/main.css">
</head>
<nav>
    <ul>
        <!-- create a link that point to the post file -->
         <li id = "login"><a href="<?php echo $path. "login.php" ?>">Log In</a></li>
         <li id = "register"><a href="<?php echo $path. "register.php" ?>">Register</a></li>
    </ul>
</nav>