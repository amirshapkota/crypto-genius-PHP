<?php
session_start();
if (isset($_SESSION["admin"])){
    header("Location: index.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
<form action="" method="POST">
    <label for="username">Username</label><input type="text" name="username">
    <br>
    <label for="password">Password</label><input type="password" name="password">
    <br><br>
<button type="Submit">Submit</button>
</form>
</body>
</html>
<?php

if ($_POST){
    $usrnm = $_POST["username"];
    $passw = $_POST["password"];
    if ($usrnm == "helloworld" && $passw == "apachesql"){
        $_SESSION["admin"] = true;
        header("Location: index.php");
    }
}

?>