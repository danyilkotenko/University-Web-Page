<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>John Hopkins University</title>
	<link rel="stylesheet" type="text/css" href="login_style.css?version=51">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">  <!--Font family for the heading-->
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> <!--Font family for the page-->
</head>
<body>
	<main>
	<div class="login_form">
		 		<h1>Sign in</h1>
        <form action="login.php" target="_blank" method="post">
            <?php include('errors.php'); ?>
            <p><input class="inpt" type="text" placeholder="Username" required="" name="username"></p>
            <p><input class="inpt" type="password" placeholder="Password" required="" name="password"></p>
            <p>
                <button class="btn-send" type="submit" name="login_user">
                    Log in
                </button>
            </p>
            <br>
            <p id="notamember">
                    Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
    </div>
	</main>
</body>	