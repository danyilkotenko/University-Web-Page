<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>John Hopkins University</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">  <!--Font family for the heading-->
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> <!--Font family for the page-->
</head>
<body>
	<main>
		 <div class="login_form">
		 		<h1>Sign in</h1>
        <form action="register.php" target="_blank" method="post">
            <p><input class="inpt" type="email" placeholder="Email" required="" name="Email"></p>
            <p><input class="inpt" type="password" placeholder="Password" required="" name="Password"></p>
            <p>
                <button class="btn-send" type="submit">
                    Log in
                </button>
            </p>
            <p id="returnmessage"></p>
        </form>
    </div>
	</main>
</body>	