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
        <h1>Login page</h1>
    </div>

    <div class="block">
        <form action="User_homepage.php" method="post">
            <div class="title">Username</div>
            <input type="text" name="username" id="username" placeholder="Enter your username...">
            <div class="title">Password</div>
            <input type="password" name="password" id="password" placeholder="Enter your password...">
            <input type="submit" value="Log in" class="submit-button">
        </form>
        <div class="additional-text">
            <p>Doesn't have account yet ? <a href="./User_signup.php">Sign up</a></p>
        </div>
    </div>
</body>

</html>