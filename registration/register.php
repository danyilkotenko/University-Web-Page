<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration system</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">  <!--Font family for the heading-->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> <!--Font family for the page-->
</head>
<body>
    <main>
         <div class="login_form">
                <h1>Registration</h1>
        <form action="register.php" target="_blank" method="post">
            <?php include('errors.php'); ?>
            <p><input class="inpt" type="email" placeholder="Email" required="" name="email" value="<?php echo $email; ?>"></p>
            <p><input class="inpt" type="password" placeholder="Password" required="" name="password_1"></p>
            <p><input class="inpt" type="password" placeholder="Confirm Password" required="" name="password_2"></p>
            <p><input class="inpt" type="text" placeholder="Name" required="" name="name"></p>
            <p><input class="inpt" type="text" placeholder="Surname" required="" name="surname"></p>
            <p><input class="inpt" type="text" placeholder="Username" required="" name="username" value="<?php echo $username; ?>"></p>
            <p>
                <button class="btn-send" type="submit" name="reg_user">
                    Sign up
                </button>
            </p>
            <p id="returnmessage"></p>
        </form>
    </div>
    </main>
</body> 