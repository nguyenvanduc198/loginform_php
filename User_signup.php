<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 9-5 CodeStar</title>
    <link rel="stylesheet" href="learning.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <div id="instruction">
        <h1>Register your account</h1>
    </div>

    <div class="block">
        <form action="User_register.php" method="post">
            <div class="title">Name</div>
            <input type="text" name="name" id="name" placeholder="Enter your display name...">
            <div class="title">Username</div>
            <input type="text" name="username" id="username" placeholder="Enter your username...">
            <div class="title">Email address</div>
            <input type="text" name="email" id="email" placeholder="Enter your email..." onkeyup="checkEmail()">
            <div class="error-message " id="email-error"></div>
            <div class="title">Password</div>
            <input type="password" name="password" id="password" placeholder="Enter your password...">
            <div class="title">Confirm password</div>
            <input type="password" name="confirm-pw" id="confirm-pw" placeholder="Enter your password...">
            <input type="submit" value="Register" class="submit-button">
        </form>

        <div class="additional-text">
            <p>Already have an account ? <a href="user_sig.php">Sign in</a></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./check_vd.js"></script>
</body>

</html>