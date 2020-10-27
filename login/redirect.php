<?php
session_start();
$name = strtolower($_POST["profit"]);
$full = "Location: ".$name."pay.php";
$am = $_POST["amount"];
$_SESSION["am"] = $am;
echo $full;
header($full);


?>