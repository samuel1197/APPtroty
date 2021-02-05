<?php
require_once 'header.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="action_page.php" style="padding-top:90px; border:1px solid #ccc">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="text"><b>Nom</b></label>
        <input type="text" placeholder="Enter votre Nom" name="Nom" required>

        <label for="text"><b>Prénom</b></label>
        <input type="text" placeholder="Enter votre Prénom" name="Prénom" required>

        <label for="date"><b>Date de naissance</b></label>
        <input type="text" placeholder="Enter votre date de naissance" name="birth" required>

        <label for="number"><b>Téléphone</b></label>
        <input type="text" placeholder="Enter votre Téléphone" name="Téléphone" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter votre Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter votre Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>
</body>
</html>
<?php
require_once 'footer.php';
?>