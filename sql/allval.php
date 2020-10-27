<?php
session_start();
include "db.php";
$user = $_SESSION['add'];

$query = "SELECT * FROM login WHERE address = '$user'";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM money WHERE address = '$user'";
$res = mysqli_query($conn, $query2);

$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($res);

$add = $user;
$type = $row["type"];
$id = (string) $row["id"];
$deposit = $row2["deposite"];
$payout = $row2["payout"];
$referal = $row2["referal"];
$query3 = "SELECT * FROM login WHERE refby='$id'";
$res2 = mysqli_query($conn, $query3);
$refnum = mysqli_num_rows($res2);

?>