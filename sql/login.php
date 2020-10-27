<?php
session_start();
include "db.php";

$usrnm = $_POST["username"];
$type = $_POST["type"];
if ($type == "none"){
    $type = "BTC";
}
if ($_SESSION["ref"]){
    $refby = $_SESSION["ref"];
}else{
    $refby = 'none';
}
$sql_u = "SELECT * FROM login WHERE address='".$usrnm."'";
$res = mysqli_query($conn, $sql_u);
if (mysqli_num_rows($res) > 0) {
    $_SESSION["logged"] = true;
    $_SESSION["add"] = $usrnm;
}else{
    $query = "INSERT INTO login(address, type, refby) VALUES ('".$usrnm."', '".$type."', '".$refby."')";
    $result = mysqli_query($conn, $query);
    $query2 = "INSERT INTO money(address, deposite, payout, referal) VALUES ('".$usrnm."', '0', '0', '0')";
    $res2 = mysqli_query($conn, $query2);
    $_SESSION["logged"] = true;
    $_SESSION["add"] = $usrnm;
  }
header("Location: ../login/cabinet.php");

?>