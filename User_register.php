<?php
// require __DIR__ . "./DataConDBO/DBO.php";
require_once __DIR__ . "/DataConDBO/DBO.php";
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_pass = $_POST['confirm-pw'];

if($password != $confirm_pass) {
    header('Location : user_sig.php', true, 200);
    die();
}

execute("INSERT INTO User (username, name, email, password) VALUES ('$username', '$name', '$email', '$password')");

?>


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
        <h1>Register account successfully</h1>
    </div>

    <div class="block">
        <div class="title">You have register an account successfully</div>

        <div class="additional-text">
            <p>Go back to <a href="user_sig.php">Sign in</a> page</p>
        </div>
    </div>
</body>

</html>