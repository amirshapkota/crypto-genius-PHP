<?

include "../sql/db.php";

$add = $_POST["add"];
$amount = $_POST["amount"];

$today = date("Y/m/d h:i");

$query = "INSERT INTO timetable(start, address, amount, type, st) VALUES('$today', '$add', '$amount', 1, 0)";
$result = mysqli_query($conn, $query);

$query = "SELECT * FROM money WHERE address='$add'";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);

$amt = (float) $row["payout"];
$amt = $amt + $amount;
$amt = number_format($amt,8,".","");
$amt = "".$amt;
$query2 = "UPDATE money SET payout='$amt' WHERE address='$add'";
$result = mysqli_query($conn, $query2);

$query = "SELECT * FROM money WHERE address='$add'";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);

$amt = (float) $row["deposite"];
$amt = $amt - $amount;
$amt = number_format($amt,8,".","");
$amt = "".$amt;
$query2 = "UPDATE money SET deposite='$amt' WHERE address='$add'";
$result = mysqli_query($conn, $query2);
header("Location: index.php");

?>