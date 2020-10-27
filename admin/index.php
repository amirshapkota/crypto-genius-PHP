<?php

session_start();

if(!isset($_SESSION["admin"])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<h1>Add Deposite</h1>
<form action="add.php" method="POST">
<label>Address:</label><input type="text" name="add">
<label>Amount:</label><input type="text" name="amount">
<button type="Submit">Submit</button>
</form>  

<h1>Add Payout</h1>
<form action="addpay.php" method="POST">
<label>Address:</label><input type="text" name="add">
<label>Amount:</label><input type="text" name="amount">
<button type="Submit">Submit</button>
</form> 

<h1>Add Active Deposite</h1>
<form action="createdep.php" method="POST">
<label>Address:</label><input type="text" name="add">
<label>Amount:</label><input type="text" name="amount">
<button type="Submit">Submit</button>
</form>

<h1>Create Payout</h1>
<form action="createpay.php" method="POST">
<label>Address:</label><input type="text" name="add">
<label>Amount:</label><input type="text" name="amount">
<button type="Submit">Submit</button>
</form>

</body>
</html>