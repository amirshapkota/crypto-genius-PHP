<?php

include "../sql/db.php";
$amount = $_POST["amount"];
$amount = (float) $amount;
$add = $_POST["add"];

$query = "SELECT * FROM money WHERE address='$add'";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);

$amt = (float) $row["deposite"];
$amt = $amt + $amount;
$amt = number_format($amt,8,".","");
$amt = "".$amt;
$query2 = "UPDATE money SET deposite='$amt' WHERE address='$add'";
$result = mysqli_query($conn, $query2);
header("Location: index.php")
?>