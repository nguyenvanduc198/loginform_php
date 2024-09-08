<?php
require('DataConDBO/DBO.php');
$username = $_POST['username'];
$password = $_POST['password'];

$loginUser = getData("SELECT * FROM User WHERE username = '$username' AND password = '$password'");

if (count($loginUser) < 1) {
    // header("Location:User_sigin.php' , true, 200");
    echo "<script>alert('Details are incorrect')</script>";
    header('Location:user_sig.php');
    // echo "<script>alert('Details are incorrect')</script>";


    die();
}

$listUser = getData("SELECT * FROM User");

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
        <h1>Account list <a href="user_sig.php">Log out</a></h1>
    </div>

    <div class="block">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($listUser as $user) {
                        $id = $user['id'];
                        $username = $user['username'];
                        $name = $user['name'];
                        $email = $user['email'];

                        echo "<tr>";
                        echo "<th scope='row'>$id</th>";
                        echo "<td>$name</td>";
                        echo "<td>$email</td>";
                        echo "<td>$username</td>";
                        echo "</tr>";
                    }

                    ?>
            </tbody>
        </table>
    </div>
</body>

</html>