<?php

session_start();
if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true){
  header("Location: ./login/cabinet.php");

}
if (isset($_GET["ref"])){
  $_SESSION["ref"] = $_GET["ref"];
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from Crypto-Genius/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 03:26:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="../data/logo.png" rel="shortcut icon" />
</head>
<body>
<script>
function sah() {
  var x = document.getElementById("type_currency");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
<script>
function select_btc() {
   document.getElementById('type').value = "BTC" ;
   document.getElementById('iconcurr').src='data/BTC.svg' ;
   
}
function select_doge() {
   document.getElementById('type').value = "DOGE" ;
   document.getElementById('iconcurr').src='data/DOGE.svg';
}
function select_ltc() {
   document.getElementById('type').value = "LTC" ;
   document.getElementById('iconcurr').src='data/LTC.svg' ;
}
function select_eth() {
   document.getElementById('type').value = "ETH" ;
   document.getElementById('iconcurr').src='data/ETH.svg' ;
}
function select_payeer() {
   document.getElementById('type').value = "USD" ;
   document.getElementById('iconcurr').src='data/PAYEER.svg' ;
}
function select_pm() {
   document.getElementById('type').value = "USD" ;
   document.getElementById('iconcurr').src='data/PM.svg' ;
}
</script>
<script>
function input() {

  var a = document.getElementById('input');
  var b = document.getElementById('output');
  if (a.style.display === "none") {
    a.style.display = "block";
    b.style.display = "none";
	$('#out').removeClass();
	$('#out').addClass("button button-o general-stat__button js-tab-trigger");
	$('#in').removeClass();
	$('#in').addClass("button button-o general-stat__button active js-tab-trigger");
  } else {
    a.style.display = "none";
    b.style.display = "block";
	

  }
}
</script>
<script>
function output() {

  var a = document.getElementById('output');
  var b = document.getElementById('input');
  if (a.style.display === "none") {
    a.style.display = "block";
    b.style.display = "none";
	$('#out').removeClass();
	$('#out').addClass("button button-o general-stat__button active js-tab-trigger");
	$('#in').removeClass();
	$('#in').addClass("button button-o general-stat__button  js-tab-trigger");
  } else {
    a.style.display = "none";
    b.style.display = "block";
	

  }
}
</script>
<script>
function showandhide(x) {
  x = x;
  var a = document.getElementById(x);
  var q = document.getElementById("q"+x);
  if (a.style.display === "none") {
    a.style.display = "block";
	$('#q'+x).addClass("accordion-item__btn js-accordion-btn active");
  } else {
    a.style.display = "none";
	$('#q'+x).removeClass();
	$('#q'+x).addClass("accordion-item__btn js-accordion-btn");
  }
}
</script>
<script>
  function login() {
  
 var wallet=$('input[name="username"]').val();
     var type = document.getElementById('type').value;
 if( type == 'none' || wallet.length<=8 ) {
	 

  iziToast.error({position: 'topRight', title : 'Erorr', message : 'Invalid Wallet Address </br> Please Change Your Wallet Address'});

 }else{
  iziToast.success({position: 'topRight', title : 'Success', message : 'You logged in Successfuly'});

 }
   
}

</script><!DOCTYPE html>
<html lang="en" class="gr__encos_cc">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="Crypto-Genius,Crypto-Genius,Crypto-Genius 10,earn,money,bitcoin,crypto,cryptocurrency,cryptocurrencies" name="keywords">
<meta content="Crypto-Genius is the most trusted earn site. Crypto-Genius is a legit U.K. registered company." name="description">
<meta content="Crypto-Genius Developers" name="author">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Main || Crypto-Genius</title>
<link rel="stylesheet" href="data/main.css">
<link rel="stylesheet" href="data/jquery.gritter.css">
<link rel="stylesheet" href="data/iziToast.min.css">
<script src="data/svg.js"></script>

</head>
<body style="background-image: url(images/bg-body.html);" data-gr-c-s-loaded="true">
<link rel="stylesheet" href="data/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous">
<header class="header" id="header">
<div class="container">
<div class="header__navbar">
<div class="navbar">
<a href="index.php" class="logo">
<img src="../data/logo.png" alt="logo" class="logo__img">
<span class="logo__title">Crypto-Genius</span>
</a>
<ul class="nav navigation navbar__navigation js-navigation js-nav-anchor">
<li><a href="index.php">Main</a></li>
<li><a href="#statistics">Statistics</a></li>
<li><a href="#faq">F.A.Q</a></li>
<li><a href="rules/index.php">Rules</a></li>
</ul>
<div class="account navbar__account">
</div>
<div class="hamburger-menu navbar__hamburger-menu js-hamburger-menu">
<div class="hamburger-menu__line"></div>
</div>
</div>
</div>
<div class="header__info-site info-site">

<div class="info-site-block">
<span class="info-site__title">Current online</span>
<span class="info-site__quantity"><?php echo(rand(90,514)); ?></span>
</div>
</div>
<div class="header__offer">
<div class="offer">
<div class="offer__basic">
<h1 class="offer-title offer__title">Crypto-Genius</h1>
<p class="offer__subtitle">
We work for you since
</p>
<div class="offer__timer timer">
<div class="timer__period">
27
<span class="timer__caption">Day</span>
</div>
<div class="timer__period">
09
<span class="timer__caption">Month</span>
</div>
<div class="timer__period">
2020
<span class="timer__caption">Year</span>
</div>
</div>
<p class="offer__descr">Enter your wallet to receive payments below and choose your payment system.</p>
<form id="loginForm" action="/sql/login.php" method="POST" class="start offer__start">
<input type="text" name="username" id="username" placeholder="Your wallet" class="start__input" minlength="9" maxlength="80" onkeyup="autoselectps();" onchange="autoselectps();" onkeypress="autoselectps();" required>


<input id="type" name="type" value="none" type="hidden">
<div id="undefined" class="dd-container">
<div class="dd-select" style="background: rgb(238, 238, 238);" onclick="sah();">
<input class="dd-selected-value" type="hidden" value="Bitcoin">
<a class="dd-selected">
<img class="dd-selected-image" src="data/BTC.svg" id="iconcurr">
<label class="dd-selected-text" style="line-height: 38px;">BTC</label>
</a>
<span class="dd-pointer dd-pointer-down"></span>
</div>

<ul class="dd-options dd-click-off-close" id="type_currency" style="display: none;">

<li onclick="select_btc(); sah();">
<a class="dd-option dd-option-selected">
<input class="dd-option-value" type="hidden" value="Bitcoin">
<img class="dd-option-image" src="data/BTC.svg">
<label class="dd-option-text">BTC</label>
</a>
</li>

<li onclick="select_doge(); sah();">
<a class="dd-option">
<input class="dd-option-value" type="hidden" value="Dogecoin">
<img class="dd-option-image" src="data/DOGE.svg">
<label class="dd-option-text">DOGE</label>
</a>
</li>

<li onclick="select_ltc(); sah();">
<a class="dd-option">
<input class="dd-option-value" type="hidden" value="Litecoin">
<img class="dd-option-image" src="data/LTC.svg">
<label class="dd-option-text">LTC</label>
</a>
</li>

<li onclick="select_eth(); sah();">
<a class="dd-option">
<input class="dd-option-value" type="hidden" value="Ethereum">
<img class="dd-option-image" src="data/ETH.svg">
<label class="dd-option-text">ETH</label>
</a>
</li>

<li onclick="select_pm(); sah();">
<a class="dd-option">
<input class="dd-option-value" type="hidden" value="Perfect Money USD">
<img class="dd-option-image" src="data/PM.svg">
<label class="dd-option-text">PERFECT&nbsp;MONEY&nbsp;USD</label>
</a>
</li>

<li onclick="select_payeer(); sah();">
<a class="dd-option">
<input class="dd-option-value" type="hidden" value="PAYEER USD">
<img class="dd-option-image" src="data/PAYEER.svg">
<label class="dd-option-text">PAYEER&nbsp;USD</label>
</a>
</li>
</ul>
</div>
<input class="button button-action start__button" type="submit" value="Log in" onclick="login();">
</form>
</div>
<div class="offer__benefit benefit">
<img src="data/offer-Img.svg" alt="benefit" class="benefit__img">
<div class="benefit__descr">
<span>+100%</span>
<span>From the deposit amount for 24 hours</span>
</div>
</div>
</div>
</div>
</div>
</header>
<div class="counters">
<div class="container">
<div class="counters-wrap">
<div class="indicator">
<div class="indicator__img">
<img src="data/users.svg" alt="users">
</div>
<span class="indicator__number">1218</span>
<span class="indicator__caption">Users</span>
</div>
<div class="indicator">
<div class="indicator__img">
<img src="data/deposits.svg" alt="deposits">
</div>
<span class="indicator__number">$6981.76</span>
<span class="indicator__caption">Total deposits</span>
</div>
<div class="indicator">
<div class="indicator__img">
<img src="data/payouts.svg" alt="payouts">
</div>
<span class="indicator__number">$2745.98</span>
<span class="indicator__caption">Total payouts</span>
</div>
</div>
</div>
</div>
<section class="about">
<div class="container">
<div class="about-wrap">
<div class="about-info about__info">
<h3 class="subtitle">Flexible referral program</h3>
<p>We have developed a convenient and flexible referral program. Now, it has become much more profitable to invite users and earn money.</p>
<p>Referral program is divided into three parts, and the percentage depends on the deposit amount of your invited user:</p>
<ul class="about-list about__list">
<li class="about-list__item">
<b>30%</b>:<br>
Bitcoin: 0.0001 - Infinity<br>
Dogecoin: 250 - Infinity<br>
Litecoin: 0.02 - Infinity<br>
Ethereum: 0.004 - Infinity<br>
Perfect Money &amp; Payeer: 1 - Infinity
</li>
</ul>
</div>
<img src="data/about-img.svg" alt="man" class="about__img">
</div>
</div>
</section>
<div class="features">
<div class="container">
<div class="features-wrap">
<div class="feature" style="background-image: url(images/bg-feature-1.php);">
<div class="feature__img">
<img src="data/affiliate.svg" alt="affiliate_programm">
</div>
<h4 class="feature__title">Affiliate programm</h4>
<p class="feature__descr">Get 30% of your partner's deposit to your payment address. All payments are automated.</p>
</div>
<div class="feature" style="background-image: url(images/bg-feature-2.php);">
<div class="feature__img">
<img src="data/auto-payouts.svg" alt="automatic_payouts">
</div>
<h4 class="feature__title">Automatic payouts</h4>
<p class="feature__descr">All operations are automated. We use fast and fault-tolerant server solutions. Therefore, in our system no delays. </p>
</div>
<div class="feature" style="background-image: url(images/bg-feature-3.php);">
<div class="feature__img">
<img src="data/protection.svg" alt="professional_protection">
</div>
<h4 class="feature__title">Professional protection</h4>
<p class="feature__descr">We use strong DDoS protection and a trusted SSL certificate to protect your personal information.</p>
</div>
</div>
</div>
</div>
<section class="general-stat" id="statistics">
<div class="container">
<h2 class="section-title">Statistics</h2>
<p class="section-subtitle section__subtitle">Here you can see last deposits and last payouts</p>
<div class="tabs general-stat__tabs">
<div class="tabs__triggers">
<button class="button button-o general-stat__button active js-tab-trigger" id="in" data-tab="input" onclick="input();">Last deposits</button>
<button class="button button-o general-stat__button js-tab-trigger" id="out" data-tab="output" onclick="output();">Last payouts</button>
</div>
<div class="tabs__content">
<div class="tabs__content-item active js-tab-content" style="display: block;" data-tab="input" id="input">
<table class="general-stat-table general-stat__table">
<tbody>
<tr>
<th>Address</th>
<th>Amount</th>
<th>Status</th>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/BTC.svg" title="BTC" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">1cvJvspQ...</a>
</td>
<td>0.001127</td>
<td><span class="general-stat-table__event">ACTIVE</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/LTC.svg" title="LTC" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">MT7QNfaw...</a>
</td>
<td>0.022774</td>
<td><span class="general-stat-table__event">ACTIVE</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PAYEER.svg" title="PAYEER" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">P1021...</a>
</td>
<td>1.00</td>
<td><span class="general-stat-table__event">ACTIVE</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/BTC.svg" title="BTC" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">3Hew3VLo...</a>
</td>
<td>0.000100</td>
<td><span class="general-stat-table__event">ACTIVE</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PM.svg" title="PM" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">U1940...</a>
</td>
<td>9.00</td>
<td><span class="general-stat-table__event">ACTIVE</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/DOGE.svg" title="DOGE" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">DHoJ8Xmi...</a>
</td>
<td>250.00</td>
<td><span class="general-stat-table__event">ACTIVE</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PM.svg" title="PM" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">U2400...</a>
</td>
<td>1.00</td>
<td><span class="general-stat-table__event">ACTIVE</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PAYEER.svg" title="PAYEER" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">P1010...</a>
</td>
<td>1.00</td>
<td><span class="general-stat-table__event">ACTIVE</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PAYEER.svg" title="PAYEER" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">P1033...</a>
</td>
<td>1.00</td>
<td><span class="general-stat-table__event">ACTIVE</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PAYEER.svg" title="PAYEER" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">P1033...</a>
</td>
<td>1.00</td>
<td><span class="general-stat-table__event">ACTIVE</span></td>
</tr>
</tbody>
</table>
</div>
<div class="tabs__content-item js-tab-content" style="display: none;" data-tab="output" id="output">
<table class="general-stat-table general-stat__table">
<tbody>
<tr>
<th>Address</th>
<th>Amount</th>
<th>Status</th>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/LTC.svg" title="LTC" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">
ML9Pf7gx...</a>
</td>
<td>0.004282</td>
<td><span class="general-stat-table__event">Payments</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/LTC.svg" title="LTC" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">
ltc1qc66...</a>
</td>
<td>0.006813</td>
<td><span class="general-stat-table__event">Payments</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/LTC.svg" title="LTC" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">
ML9Pf7gx...</a>
</td>
<td>0.006832</td>
<td><span class="general-stat-table__event">Payments</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PAYEER.svg" title="PAYEER" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">
P1020...</a>
</td>
<td>0.30</td>
<td><span class="general-stat-table__event">Payments</span></td>
</tr>
 <tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PAYEER.svg" title="PAYEER" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">
P1025...</a>
</td>
<td>2.70</td>
<td><span class="general-stat-table__event">Payments</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PAYEER.svg" title="PAYEER" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">
P1010...</a>
</td>
<td>0.30</td>
<td><span class="general-stat-table__event">Payments</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PM.svg" title="PM" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">
U2400...</a>
</td>
<td>0.30</td>
<td><span class="general-stat-table__event">Payments</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PAYEER.svg" title="PAYEER" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">
P1027...</a>
</td>
<td>0.30</td>
<td><span class="general-stat-table__event">Payments</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PAYEER.svg" title="PAYEER" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">
P1027...</a>
</td>
<td>0.30</td>
<td><span class="general-stat-table__event">Payments</span></td>
</tr>
<tr>
<td>
<img data-placement="left" data-toggle="tooltip" src="data/PM.svg" title="PM" width="17">
<a target="_blank" href="#" style="overflow: hidden; text-overflow: ellipsis;display: inline-block;max-width: 380px;">
U2370...</a>
</td>
<td>0.60</td>
<td><span class="general-stat-table__event">Payments</span></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<section class="faq" id="faq" style="background-image: url(data/bg-faq.svg);">
<div class="container">
<h2 class="section-title">Help</h2>
<p class="section-subtitle section__subtitle">In this section You can find the most frequently asked questions.</p>
<div class="faq-list">
<div class="faq-list__item js-accord-item" onclick="showandhide(1)">
<p class="faq-list__question">What makes our service unique?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="1">We attach great importance to transparency. In Crypto-Genius you can track all deposits and payouts of any user in real time at any time.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(2)">
<p class="faq-list__question">Where does the profit come from?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="2">In Crypto-Genius, you don't need to sign contracts or pledge your property. No creditors and no debtors. In fact, it's very simple: one user asks for help, the other helps. All profits are provided by new investments.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(3)">
<p class="faq-list__question">How it's work?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="3">For example, you make a deposit of 0.00005 Bitcoin and after 24 hours you will get 0.000075 Bitcoin.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(4)">
<p class="faq-list__question">I want to start earning money. What should I do?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="4">1. Provide us with your personal wallet to earn money.<br>2. Make a deposit for the amount you need.<br>3. Wait deposit confirmation.<br>4. After 24 hours, wait earnings on your wallet specified at the registration.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(5)">
<p class="faq-list__question">Do you have commissions?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="5">No, we do not charge any fees for the use of our service.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(6)">
<p class="faq-list__question">Is your site secure from hacker attacks?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="6">Yes, we use serious DDOS protection and a powerful server to provide you the service available at any time. SSL certificate guarantees the security of all information you enter.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(7)">
<p class="faq-list__question">What cryptocurrencies do you support?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="7">We support Bitcoin, Dogecoin, Litecoin, PAYEER and Perfect Money.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(8)">
<p class="faq-list__question">When will my deposit appear on the home page?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="8">The deposit will be created immediately after the confirmation of the transaction in the network of cryptocurrency.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(9)">
<p class="faq-list__question">Can I make more than one deposit?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="9">Yes, there are no limits.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(10)">
<p class="faq-list__question">It's time for my payout. When will I get it?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="10">Payments order is automated and takes no more than 3 hours.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(11)">
<p class="faq-list__question">What to do if the deposit is less than the minimum amount?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="11">Any amount less than the minimum will be considered a donation and will not be displayed as a valid deposit! The maximum amount is not limited. Please pay attention to the minimum amount for each payment system when creating a deposit.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(12)">
<p class="faq-list__question">Do you have an affiliate program?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="12">Yes, we give from 5 to 20 percent for each deposit of your referral, depending on the amount of the deposit.</p>
</div>
<div class="faq-list__item js-accord-item" onclick="showandhide(13)">
<p class="faq-list__question">How can I contact you?</p>
<p class="faq-list__answer js-accord-answer" style="display:none;" id="13">If you have any questions, you can contact us at the email address listed at the bottom of the page.</p>
</div>
</div>
</div>
</section>
<section class="partners" id="partners">
<div class="container">
<h2 class="section-title">We accept</h2>
<div class="partners-wrap partners__wrap">
<svg width="170" height="60" role="img" class="partners-img" fill="#004aa5"> <use xlink:href="#bm_icon_payment_transparent_bitcoin"></use> </svg>
<svg width="170" height="60" role="img" class="partners-img" fill="#004aa5"> <use xlink:href="#bm_icon_payment_transparent_dogecoin"></use> </svg>
<svg width="170" height="60" role="img" class="partners-img" fill="#004aa5"> <use xlink:href="#bm_icon_payment_transparent_litecoin"></use> </svg>
<svg width="170" height="60" role="img" class="partners-img" fill="#004aa5"> <use xlink:href="#bm_icon_payment_transparent_dash"></use> </svg>
<svg width="170" height="60" role="img" class="partners-img" fill="#004aa5"> <use xlink:href="#bm_icon_payment_transparent_ethereumclassic"></use> </svg>
<svg width="170" height="60" role="img" class="partners-img" fill="#004aa5"> <use xlink:href="#bm_icon_payment_transparent_payeer"></use> </svg>
<svg width="170" height="60" role="img" class="partners-img" fill="#004aa5"> <use xlink:href="#bm_icon_payment_transparent_perfectmoney"></use> </svg>
</div>
</div>
</section>

<footer class="footer" style="background-image: url(images/bg-footer.php);">
<div class="container">
<div class="footer-navbar footer__navbar">
<div class="footer-block footer__block">
<a href="index.php" class="logo footer__logo">
<img src="../data/logo.png" alt="logo" class="logo__img">
<span class="logo__title">Crypto-Genius</span>
</a>
</div>
<div class="guide footer__guide">
<span class="guide__title">Menu</span>
<ul class="guide-navigation guide__navigation">
<li><a href="index.php">Main</a></li>
<li><a href="#statistics">Statistics</a></li>
<li><a href="#faq">F.A.Q</a></li>
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
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
    var translations = {
        SUCCESS: "Success",
        ERROR: "Error",
        NO_CONNECTION: "No internet connection.",
        SERVER_ERROR: "Server error. Please try again later.",
        EMPTY_ADDRESS: "You must enter your payment address.",
        UNKNOWN_ERROR: "Unknown error. Please try again later.",
        SUCCESS_SUB: "Subscription is successfully submitted.",
        EMPTY_EMAIL: "E-mail cannot be empty."
    };
</script>
<script src="data/api.js" async="" defer=""></script>
<script src="data/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="data/jquery.smooth-scroll.min.js" integrity="sha256-fdhzLBb+vMfwRwZKZPtza9iFcdVtEhrWRHhxSzEy4Ek=" crossorigin="anonymous"></script>
<script src="data/jquery.gritter.js"></script>
<script src="data/ddslick.min.js"></script>
<script src="data/svg4everybody.min.js"></script>
<script src="data/iziToast.js"></script>
<script src="data/main.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
<script src="vendor_theme/bootstrap/js/bootstrap.min.php"></script>
<script src="vendor_theme/jquery.cookie/jquery.cookie.php"> </script>
<script src="vendor_theme/owl.carousel/owl.carousel.min.php"></script>
<script src="js/front.php"></script>
<script type="text/javascript">

function autoselectps(){
    var wallet=$('input[name="username"]').val();
    
    if(wallet[0]=="D" && wallet.length>=31){
      var newclass="doge";
    }else
    if(wallet[0]=="0" && wallet[1]=="x"){
      var newclass="eth";
    }else    
    if(wallet[0]=="U" && wallet.length>5){
      var newclass="pm";
    }else
    if(wallet[0]=="P" && wallet.length>5){
      var newclass="payeer";
    }else
    if(wallet[0]=="l" && wallet[1]=="t" && wallet[1]=="c" && wallet.length>70){
      var newclass="ltc";
    }else
    if(wallet[0]=="L" && wallet.length>30){
      var newclass="ltc";
    }else
    if(wallet[0]=="M" && wallet.length>30){
      var newclass="ltc";
    }else
    if(wallet[0]=="b" && wallet[1]=="c" && wallet.length>70){
      var newclass="btc";
    }else  
    if(wallet[0]=="3" && wallet.length>30){
      if($('select[name="typeofwallet"]').val()!='ltc'){
        var newclass="btc";        
    }else{
        var newclass="ltc";    
    }
    }else
    if(wallet[0]=="1" && wallet.length>30){
      var newclass="btc";
    }else{
      var newclass="none";
    }
      if(newclass!="none"){
        $('select[name="typeofwallet"]').val(newclass);
        var $select = $('select[name="typeofwallet"]');





        $select.val(newclass).trigger('change.select2');


        var res = newclass.toUpperCase();
		var sr = "data/" + res + ".svg"
       
		document.getElementById('iconcurr').src='data/'+res+'.svg' ;
		document.getElementById('type').value= res;


       // fpJS(newclass);
      }
  }
</script>
<script type="text/javascript">
    function validateFormLogin()
    {
        var min_length = 9;
        var max_length = 80;
        var error_message = "";

        var val_length = $("#username").val().length;
        if(val_length > 0)
        {
            if(val_length <  min_length )
            {
                error_message = "Wallet address is invalid! Enter correct wallet address or <b><a href='https://coinpayments.net' target='_blank'>Create New Wallet Address</a></b>. ";
                $("#result").html(error_message);
                return false;
            }
            if(val_length  > max_length)
            {
                error_message = "Wallet address is invalid! Enter correct wallet address or <b><a href='https://coinpayments.net' target='_blank'>Create New Wallet Address</a></b>. ";
                $("#result").html(error_message);
                return false;
            }
            success_message = "Please wait...";
            $("#result").text(success_message);
            return true;
        }
        else
        {
            error_message = "This field is required ";
            $("#result").text(error_message);
            return false;
        }
    }
        </script>

</body>
</html>