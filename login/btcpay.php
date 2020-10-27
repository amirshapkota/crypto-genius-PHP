<?php
include "../sql/allval.php";
if (!isset($_SESSION["logged"]) || $_SESSION["logged"] == false){
  header("Location: ./login/cabinet.php");

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
<title>CreateDeposit || Crypto-Genius</title>
<link rel="stylesheet" href="../data/main.css">
<link rel="stylesheet" href="../data/jquery.gritter.css">
<link rel="stylesheet" href="../data/iziToast.min.css">
<script src="../data/svg.js"></script>
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
<li>
<a href="cabinet.php" onmouseover="document.getElementById('user').src = '../data/user-1.png';" onmouseout="document.getElementById('user').src = '../data/user.png';">
<img src="../data/user.png" width="24px" id="user">&nbsp; My profile</a>
</li>
<li class="active">
<a href="#">
<img src="../data/case-1.png" width="24px" id="case">&nbsp; Make a deposit</a>
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

<center>
<section class="make-deposit">

<script>
function plan(valNum) {
  valNum = parseFloat(valNum);


         var second = document.getElementById('speed').value;
      var price = document.getElementById('price').value;

if( second === "BTC")	{  document.getElementById('image').value = valNum ;  document.getElementById('price').value = (valNum * 0.00009);  document.getElementById('point_per_day').value = (valNum * 0.00009 )*2;  document.getElementById('earning_rate').value = (valNum * 0.00009 * 2 / 1440);} 
if( second === "LTC")	{  document.getElementById('image').value = valNum ;  document.getElementById('price').value = (valNum * 0.02044); document.getElementById('point_per_day').value = (valNum * 0.02044 )*2;  document.getElementById('earning_rate').value = (valNum * 0.02044 * 2 / 1440);} 
if( second === "DOGE")	{  document.getElementById('image').value = valNum ;  document.getElementById('price').value = (valNum * 358); document.getElementById('point_per_day').value = (valNum * 358 )*2;  document.getElementById('earning_rate').value = (valNum * 358 * 2 / 1440);} 
if( second === "ETH")	{  document.getElementById('image').value = valNum ;  document.getElementById('price').value = (valNum * 0.0026); document.getElementById('point_per_day').value = (valNum * 0.0026 )*2;  document.getElementById('earning_rate').value = (valNum * 0.0026 * 2 / 1440);} 
if( second === "PM")	{  document.getElementById('image').value = valNum ;  document.getElementById('price').value = valNum; document.getElementById('point_per_day').value = (valNum * 2 );  document.getElementById('earning_rate').value = (valNum * 2 / 1440);} 
if( second === "PAYEER")	{  document.getElementById('image').value = valNum ;  document.getElementById('price').value = valNum; document.getElementById('point_per_day').value = (valNum * 2 );  document.getElementById('earning_rate').value = (valNum * 2 / 1440);} 


   
}
 function button(){
	var type = document.getElementById('profit').value; 

	
	if ( type === 'PM' || type === 'PAYEER' ) {
  var x = document.getElementById("price-from");
	 x.style.display = "block";
	 
	}
	
		if ( type === 'BTC' ) {window.location.href = "../createDeposit/?type=BTC";}
		if ( type === 'ETH' ) {window.location.href = "../createDeposit/?type=ETH";}
		if ( type === 'LTC' ) {window.location.href = "../createDeposit/?type=LTC";}
		if ( type === 'DOGE' ) {window.location.href = "../createDeposit/?type=DOGE";}
	
	
	
}

 function butt(){
     var button = document.getElementById('clickButton');
    button.form.submit();
 }
   function dep() {
  

     var type = document.getElementById('amount').value;
 if( type < 1 ) {
	 

  iziToast.error({position: 'topRight', title : 'Erorr', message : 'The amount entered is below the lower<br>threshold of investment.'});

 }else{
  butt();
  iziToast.success({position: 'topRight', title : 'Success', message : 'A Request is Created'});

 }
   
}



</script>
<br>







<div class="tabs__content">
<div class="tabs__content-item active js-tab-content" style="display: block;" data-tab="input" id="input">
<h1><b><font color="131b87">Proceed BTC Payment</font></b></h1><br>
<h3>Payment Amount : <?php echo $_SESSION["am"]?></h3>
<h3>Profit Plan : 200 %</h3>
<h3>Address : <font color="4a0b0b">341FJQ5XM1bAxFxkzXSPoj9HwEiLc8P38g</font> </h3>

<img src="../data/btcpay.png" height="200" width="200"><br><br>
Send Amount Here to the Address : <font color="4a0b0b">341FJQ5XM1bAxFxkzXSPoj9HwEiLc8P38g</font> for deposit.<br><br>
It may take upto 3 confirmation for deposit
</div>
</div>









<div class="pmupru" style="display : none;" id="price-from">
<label class="deposit__label" for="amount">Amount</label>
<input class="deposit__input" id="amount" name="amount" placeholder="Enter the deposit amount" type="number" step="0.00001" oninput="plan(this.value)" onkeyup="plan(this.value)" onchange="plan(this.value)">
<button class="button button-orange deposit__button pmupru" type="submit" onclick="dep();">Enter</button>
</div>
</div>
</section>

</center>

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
<script src="../data/jquery.gritter.js"></script>
<script src="../data/ddslick.min.js"></script>
<script src="../data/svg4everybody.min.js"></script>
<script src="../data/main.js"></script>
<script src="../data/iziToast.js"></script>

</body></html>