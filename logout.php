<?php

session_start();
$_SESSION["logged"] = false;
$_SESSION["add"] = "";
$_SESSION["ref"] = "none";
header('Location: ./index.php');

?>