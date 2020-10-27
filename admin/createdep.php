<?php
include "../sql/db.php";

$add = $_POST["add"];
$am = $_POST["amount"];
$am = (float) $am;
$am = number_format($am,8,".","");

$today = date("Y/m/d h:i");

$query = "INSERT INTO timetable(start, address, amount, type, st) VALUES('$today', '$add', '$am', 0, 0)";
$result = mysqli_query($conn, $query);
header("Location: index.php");

?>