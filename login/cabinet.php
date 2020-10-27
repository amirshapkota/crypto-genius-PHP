<?php
include "../sql/allval.php";
include "../sql/db.php";

if (!isset($_SESSION["logged"]) || $_SESSION["logged"] == false){
  header("Location: ./login/cabinet.php");

}

$query = "SELECT * FROM timetable WHERE address='$add' AND type=0";
$trus = mysqli_query($conn, $query);
$rown = mysqli_num_rows($trus);
if ($rown){
  for ($i = 0; $i < $rown; $i++){
    $therow2 = mysqli_fetch_array($trus);
    if ($i == ($rown - 1)){
      $amo = $therow2["amount"];

    }
  }
}


$query2 = "SELECT * FROM timetable WHERE type=0 AND st=0";
$res = mysqli_query($conn, $query2);

$nr = mysqli_nums_rows($res);
for ($i = 0; $i < $nr; $i++){
  $row = mysqli_fetch_array($res);
  $time = $row["start"];
  $amoun = $row["amount"];
  $amoun = (float) $amoun;
  $date = date('Y-m-d h:i', strtotime($time. ' + 1 day'));
  $timenow = date("Y-m-d h:i");
  if ($timenow > $date){
    $anoque = "UPDATE timetable SET st=1 WHERE address='$add'";
    $resu = mysqli_query($conn, $anoque);
    $query = "SELECT * FROM money WHERE address='$add'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);

    $amt = (float) $row["deposite"];
    $amt = $amt + $amoun;
    $amt = number_format($amt,8,".","");
    $amt = "".$amt;
    $query2 = "UPDATE money SET deposite='$amt' WHERE address='$add'";
    $result = mysqli_query($conn, $query2);
  } 

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="../data/logo.png" rel="shortcut icon" />
</head>
<body>

<script>
function sahb() {
  var x = document.getElementById("type_currency");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script>
function sah() {
  var x = document.getElementById("type_currency");
  if (x.style.display === "none") {
    x.style.display = "block";
  }else{
	  x.style.display = "none";
  } 
}
</script>
<script>
function showandhide() {
  var x = document.getElementById("form");
  if (x.style.display === "none") {
    x.style.display = "block";
		var y = document.getElementById('pp');

	delete y;

	
  } else {
    x.style.display = "none";

  }
}
</script>
<script>
function select_btc() {
window.location.href = "../create/?currency=BTC";
  
}

function select_doge() {
window.location.href = "../create/?currency=DOGE";
}

function select_ltc() {
window.location.href = "../create/?currency=LTC";
}

function select_eth() {
window.location.href = "../create/?currency=ETH";
}

function select_payeer() {
   document.getElementById('profit').value = "PAYEER" ;
   var orginal = document.getElementById('speed').value;
if( orginal === "BTC") {  $('#pp').val("1.000 USD = 0.00008 BTC"); }
if( orginal === 'LTC') { $('#pp').val("1.000 USD = 0.01611 LTC"); }
if( orginal === 'DOGE') { $('#pp').val("1.000 USD = 309.09677 DOGE"); }
if( orginal === 'ETH') { $('#pp').val("1.000 USD = 0.00213 ETH"); }
if( orginal === 'PM') { $('#pp').val("1.000 USD = 1.000 USD"); }
if( orginal === 'PAYEER') { $('#pp').val("1.000 USD = 1.000 USD"); }
  var x = document.getElementById("payeer-pm");
  if (x.style.display === "none") {
    x.style.display = "block";

  } else {
    x.style.display = "none";

  }
  var x = document.getElementById("form");
  if (x.style.display === "none") {
    x.style.display = "block";

  } else {
    x.style.display = "none";

  }
  document.getElementById('selected').innerphp = "Payeer" ;
   document.getElementById('img').src='../data/PAYEER.svg' ;
}

function select_pm() {
	document.getElementById('profit').value = "PM" ;
    var orginal = document.getElementById('speed').value;

if( orginal === "BTC") {  $('#pp').val("1.000 USD = 0.00008 BTC"); }
if( orginal === 'LTC') { $('#pp').val("1.000 USD = 0.01611 LTC"); }
if( orginal === 'DOGE') { $('#pp').val("1.000 USD = 309.09677 DOGE"); }
if( orginal === 'ETH') { $('#pp').val("1.000 USD = 0.00213 ETH"); }
if( orginal === 'PM') { $('#pp').val("1.000 USD = 1.000 USD"); }
if( orginal === 'PAYEER') { $('#pp').val("1.000 USD = 1.000 USD"); }
   document.getElementById('selected').innerphp = "Perfect Money" ;
   document.getElementById('img').src='../data/PM.svg' ;

  var x = document.getElementById("payeer-pm");
  if (x.style.display === "none") {
    x.style.display = "block";

  } else {
    x.style.display = "none";

  }
  var x = document.getElementById("form");
  if (x.style.display === "none") {
    x.style.display = "block";

  } else {
    x.style.display = "none";

  }
}

</script>
<script>
 function createDeposit(){
window.location.href = "../createDeposit";
}
</script>
<!DOCTYPE html>
<html lang="EN" class="gr__encos_cc">
<head>
<meta http-equiv="Content-Type" content="text/php; charset=UTF-8">
<meta content="Crypto-Genius,Crypto-Genius,Crypto-Genius 10,earn,money,bitcoin,crypto,cryptocurrency,cryptocurrencies" name="keywords">
<meta content="Crypto-Genius is the most trusted earn site. Crypto-Genius is a legit U.K. registered company." name="description">
<meta content="Crypto-Genius Developers" name="author">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your profile || Crypto-Genius</title>
<link rel="stylesheet" href="../data/main.css">
<link rel="stylesheet" href="../data/jquery.gritter.css">
<link rel="stylesheet" href="../data/iziToast.js">
<link rel="stylesheet" href="../data/iziToast.min.css">
<script src="../data/svg.js"></script>
<script src="https://kit.fontawesome.com/0906b3a795.js" crossorigin="anonymous"></script>
</head>
<body class="page-profile" data-gr-c-s-loaded="true">
<link rel="stylesheet" href="../data/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous">

<header class="header">
<div class="container">

<div class="header__navbar">
<div class="navbar">

<a href="../" class="logo">
<img src="../data/logo.png" alt="logo" class="logo__img">
<span class="logo__title">Crypto-Genius</span>
</a>

<ul class="nav navigation navbar__navigation js-navigation js-nav-anchor">
<li><a href="../index.php">Main</a></li>
<li><a href="../index.php#statistics">Statistics</a></li>
<li><a href="../index.php#faq">F.A.Q</a></li>
</ul>

<div class="account navbar__account"><a href="../logout.php" class="button button-o header__button-o">Log out</a></div>

<div class="hamburger-menu navbar__hamburger-menu js-hamburger-menu">
<div class="hamburger-menu__line"></div>
</div>
</div>
</div>

<div class="header__navigation-profile header-navigation-profile js-navigation">

<a href="../" class="logo">
<img src="../data/logo-white.svg" alt="logo" class="logo__img">
<span class="logo__title">Crypto-Genius</span>
</a>

<ul class="navigation-profile">
<li class="active">
<a href="#">
<img src="../data/user-1.png" width="24px" id="user">&nbsp; My profile</a>
</li>
<li class="">
<a href="createDeposit.php" onmouseover="document.getElementById('case').src = '../data/case-1.png';" onmouseout="document.getElementById('case').src = '../data/case.png';">
<img src="../data/case.png" width="24px" id="case">&nbsp; Make a deposit</a>
</li>
<li class="">
<a href="deposits.php" onmouseover="document.getElementById('creditcard').src = '../data/creditcard-1.png';" onmouseout="document.getElementById('creditcard').src = '../data/creditcard.png';">
<img src="../data/creditcard.png" width="24px" id="creditcard">&nbsp; My deposits</a>
</li>
<li class="">
<a href="payouts.php" onmouseover="document.getElementById('coin').src = '../data/coin-1.png';" onmouseout="document.getElementById('coin').src = '../data/coin.png';">
<img src="../data/coin.png" width="24px" id="coin">&nbsp; My payouts</a>
</li>
</ul>
<img src="../data/bot.svg" alt="bot" class="header-navigation-profile__img">
</div>
</div>
</header>
<section class="my-profile profile-page">
<div class="profile-head">
<div class="container-lg">
<div class="profile-head-wrap" style="justify-content: space-around!important;">
<div class="profile-head-card">
<img src="../data/bitcoin.svg" alt="currency" class="profile-head-card__img">
<div class="profile-head-card__data">
<span class="profile-head-card__adr"><?php echo $add?></span>
<span class="profile-head-card__title">Payment address</span>
</div>
</div>
<div class="profile-head-card">
<img src="../data/bitcoin-circle.svg" alt="amount" class="profile-head-card__img">
<div class="profile-head-card__data">
<span class="profile-head-card__sum"><?php echo $deposit?><?php echo $type ?></span>
<span class="profile-head-card__title">Deposits</span>
</div>
</div>
<div class="profile-head-card">
<img src="../data/dollar-bag.svg" alt="cash-out" class="profile-head-card__img">
<div class="profile-head-card__data">
<span class="profile-head-card__sum"><?php echo $payout?><?php echo $type ?></span>
<span class="profile-head-card__title">Payouts</span>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="my-info">
<div class="container">
<div class="my-info-wrap">
<div class="my-info-card">
<h2 class="my-info-card__title">Total referrals</h2>
<span class="my-info-card__sum" style="font-size: 18px!important;"><?php echo $refnum?></span>
<h3 class="my-info-card__title-sec">Referral rewards</h3>
<span class="my-info-card__total-sum" style="font-size: 18px!important;"><?php echo $referal?><?php echo $type ?></span>
</div>
<div class="my-info-card">
<h2 class="my-info-card__title">Total deposits</h2>
<span class="my-info-card__sum" style="font-size: 18px!important;"><?php echo $deposit?><?php echo $type ?></span>
<h3 class="my-info-card__title-sec">Active deposits</h3>
<span class="my-info-card__total-sum" style="font-size: 18px!important;"><?php 
if(isset($amo)){
  echo $amo;
}else{
  echo 0.0000;
}
?>
<?php echo $type ?>
</span>
</div>
<div class="my-info-card">
<h2 class="my-info-card__title">Total payouts</h2>
<span class="my-info-card__sum" style="font-size: 18px!important;"><?php echo $payout?><?php echo $type ?></span>
<h3 class="my-info-card__title-sec">Waiting payouts</h3>
<span class="my-info-card__total-sum" style="font-size: 18px!important;">0.00000<?php echo $type ?></span>
</div>
</div>
</div>
</div>
<style>
        .accurals__item:first-child::before {
            background: url(../images/bitcoin-rounded.svg) no-repeat center center!important;
        }
        .accurals__info {
            border-bottom: 1px #54a5d4 dashed;
            cursor: copy;
        }
    </style>
<div class="accurals my-profile__accurals">
<div class="container">
<div class="accurals-wrap">
<div class="accurals__item">
<span class="accurals__title">Affiliate link:</span>
<span class="accurals__info" onclick="copyit('_ref_916576383','Link copied')" id="_ref_916576383">https://www.crypto-genius.ltd/?ref=<?php echo $id ?></span>
</div>

</div>
</div>
</div>
<h1 style="text-align: center;">Your referrals</h1>
<div class="my-stat">
<div class="container">
<div class="my-stat-wrap">
<div class="stat-table-wrap">
<table class="stat-table stat__table">
<tbody><tr>
<th>Address</th>
<th>Profit</th>
</tr>
<?php

for ($i = 0; $i < $refnum; $i++ ){

  $refs = mysqli_fetch_array($res2);
  $a = $refs["address"];

  $quer = "SELECT * FROM money WHERE address='$a'";
  $resu = mysqli_query($conn, $quer);
  $acc = mysqli_fetch_array($resu);
  $b = (float) $acc["deposite"];
  $b = $b*0.25;

  echo "<tr><td>$a</td><td>$b</td></tr>";
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<footer class="footer" style="background-image: url(/images/bg-footer.svg);">
<div class="container">
<div class="footer-navbar footer__navbar">
<div class="footer-block footer__block">
<a href="../" class="logo footer__logo">
<img src="../data/logo.png" alt="logo" class="logo__img">
<span class="logo__title">Crypto-Genius</span>
</a>
</div>
<div class="guide footer__guide">
<span class="guide__title">Menu</span>
<ul class="guide-navigation guide__navigation">
<li><a href="../index.php">Main</a></li>
<li><a href="../index.php#statistics">Statistics</a></li>
<li><a href="../index.php#faq">F.A.Q</a></li>
</ul>
</div>
<div class="guide contacts footer__guide">
<span class="guide__title">Contacts</span>
<ul class="guide-navigation guide__navigation">
<li><a href="support@crypto-genius.ltd">support@crypto-genius.ltd</a></li>
</ul>
</div>
</div>
</div>
<div class="copyright footer__copyright">Copyright © 2020 Crypto-Genius. All rights reserved.</div>
</footer>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
    var translations = {
        SUCCESS: "Success",
        ERROR: "Error",
        NO_CONNECTION: "No internet connection.",
        SERVER_ERROR: "Server error. Please try again later.",
        EMPTY_ADDRESS: "You must enter your payment address.",
        UNKNOWN_ERROR: "Unknown error. Please try again later.",
        SUCCESS_SUB: "Subscription is successfully submitted.",
        EMPTY_EMAIL: "E-mail cannot be empty.",
        EMPTY_PIN: "PIN cannot be empty."
    };
</script>
<script src="../data/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="../data/jquery.smooth-scroll.min.js" integrity="sha256-fdhzLBb+vMfwRwZKZPtza9iFcdVtEhrWRHhxSzEy4Ek=" crossorigin="anonymous"></script>
<script src="../data/ddslick.min.js"></script>
<script src="../data/svg4everybody.min.js"></script>
<script src="../data/main.js"></script>
</body></html>
<?php



?>