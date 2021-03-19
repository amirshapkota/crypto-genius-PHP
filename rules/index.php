<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from Crypto-Genius/rules/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 03:28:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="data/icon.html" rel="shortcut icon" />
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
   document.getElementById('iconcurr').src='data/BTC.html' ;
   
}
function select_doge() {
   document.getElementById('type').value = "DOGE" ;
   document.getElementById('iconcurr').src='data/DOGE.html';
}
function select_ltc() {
   document.getElementById('type').value = "LTC" ;
   document.getElementById('iconcurr').src='data/LTC.html' ;
}
function select_eth() {
   document.getElementById('type').value = "ETH" ;
   document.getElementById('iconcurr').src='data/ETH.html' ;
}
function select_payeer() {
   document.getElementById('type').value = "PAYEER" ;
   document.getElementById('iconcurr').src='data/PAYEER.html' ;
}
function select_pm() {
   document.getElementById('type').value = "PM" ;
   document.getElementById('iconcurr').src='data/PM.html' ;
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
<title>Rules || Crypto-Genius</title>
<link rel="stylesheet" href="../data/main.css">
<link rel="stylesheet" href="../data/jquery.gritter.css">
<script src="../data/svg.js"></script>

</head>
<body style="background-image: url(../images/bg-body.html);" data-gr-c-s-loaded="true">
<link rel="stylesheet" href="../data/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous">
<header class="header" id="header">
<div class="container">
<div class="header__navbar">
<div class="navbar">
<a href="../index.html" class="logo">
<img src="../data/logo.svg" alt="logo" class="logo__img">
<span class="logo__title">Crypto-Genius</span>
</a>
<ul class="nav navigation navbar__navigation js-navigation js-nav-anchor">
<li><a href="../index.html">Main</a></li>
<li><a href="#statistics">Statistics</a></li>
<li><a href="#faq">F.A.Q</a></li>
</ul>
<div class="account navbar__account">
</div>
<div class="hamburger-menu navbar__hamburger-menu js-hamburger-menu">
<div class="hamburger-menu__line"></div>
</div>
</div>
</div>
<section id="faq" class="faq">
<p>We strongly recommend to read the terms and conditions of the convention before registration on the website and becoming the company's investor.
The rules, General terms and conditions of cooperation of the company Crypto-Genius Corp (the "Company") and the investor (hereinafter - the Investor) are prescribed in this section. This document alludes to the fact that both parties accept all regulations, which are spelled out in the document and agree to abide by them. The document comes into force once the registration on the website of the Company is completed by the Investor.</p>
<h2>1. GENERAL PROVISIONS</h2>
<p>1.1. In order to register on the website of the Company and to become the Investor, the person must be at least 18 years old at the moment of the registration. </p>
<p>1.2. The user automatically receives the status of the Investor immediately after registration on the website and accepting all the terms of the agreement. </p>
<p>1.3. If the user disagrees with any of the provisions of this agreement or if they have any doubts on certain items - the registration should be terminated. </p>
<p>1.4. All financial transactions carried out through the Company's website, are confidential and are not disclosed to third parties. The Investor has an opportunity to carry out financial transactions and to use other services of the Company only after registration on the website.</p>
<h2>2. THE RIGHTS AND OBLIGATIONS OF THE COMPANY</h2>
<p>2.1. The Company undertakes to use funds from investors for its intended purpose and to conduct real activity on the Forex market ,Mining and Stocks. </p>
<p>2.2. The company guarantees the safety of the Investor's funds and undertakes to perform deposit and withdrawal of profit timely. </p>
<p>2.3. The company is not responsible for any technical malfunctions of electronic payment systems. Financial transactions that are associated with deposit and withdrawal of funds to the account of electronic payment systems are irreversible and final. </p>
<p>2.4. The company shall not be personally liable for incorrectly executed transactions with monetary funds and for incorrectly issued financial account. </p>
<p>2.5. The company is responsible for maintaining the confidentiality of personal information that has been provided by the Investor.</p>
<h2>3. THE RIGHTS AND OBLIGATIONS OF THE INVESTOR</h2>
<p>3.1. The investor, while filling in the registration form, is personally responsible for the accuracy of the information provided. </p>
<p>3.2. The Investor is obliged to review each transaction on their financial account. In case of detecting any inaccuracies or discrepancies, the Investor can seek help from support services. </p>
<p>3.3. All services provided by the Company, shall be used by the Investor only in order to conduct investment activities. </p>
<p>3.4. The investor consents to the processing of personal information in accordance with the provisions stated in the legislation.</p>
<h2>4. RISK DISCLOSURE</h2>
<p>4.1. The company minimizes the risks that may arise during the conduct of activities in the currency market. In addition, there are risks which are related to the use of an Internet-based deal execution trading system and include risks connected with possible hardware or software failures.</p>
<h2>5. COPYRIGHT NOTICE</h2>
<p>5.1. Crypto-Genius website, all the information and services hosted are the private property of the Company and are protected by copyright law. </p>
<p>5.2. In the case of copyright infringement (harming website, copy materials, and so on.) the Investor will be prosecuted; his account will be blocked, along with funds that were on his personal account.</p>
<h2>6. CIRCUMSTANCES OF INSEPARABLE FORCE</h2>
<p>6.1. For the duration of circumstances of inseparable force (changes in legislation, natural disasters, military situation, etc.); the Company shall be entitled to suspend its activities indefinitely. Such circumstances can not be subject of influence from both the Company and the Investor. </p>
<p>6.2. The circumstances of inseparable force imply the impossibility to carry out any transactions and financial transactions in standard mode.</p>
<h2>7. INTRODUCTION OF AMENDMENTS AND ADDITIONS</h2>
<p>7.1. Applicable rules and the terms of the agreement can be reviewed by the project administration. </p>
<p>7.2. The administration has the right to make changes and additions at any time. Additions and changes are published in this section and shall take effect immediately after their announcement. </p>
<p>7.3. In order to be aware of possible changes, we encourage you to periodically review this section.</p>
<h2>8. TERMINATION OF THE COOPERATION</h2>
<p>8.1. Termination of the cooperation between the Company and the Investor may be initiated by either side. </p>
<p>8.2. The Company has the right to unilaterally terminate the cooperation with the Investor in case of violation of terms and conditions of the agreement. </p>
<p>8.3. The Investor can terminate the agreement if they decide to cease their investment activities in the Company.</p>
<h2>9. THE SCHEME OF ARRANGEMENT</h2>
<p>9.1 Conflict resolution between the Company and the Investor shall be held in the format of negotiations or in accordance with applicable law.</p>
</section>
</div>
</header>
<div class="counters">
<div class="container">
<div class="counters-wrap">
<div class="indicator">
<div class="indicator__img">
<img src="../data/users.svg" alt="users">
</div>
<span class="indicator__number"></span>
<span class="indicator__caption">Users</span>
</div>
<div class="indicator">
<div class="indicator__img">
<img src="../data/deposits.svg" alt="deposits">
</div>
<span class="indicator__number"><i class="fab fa-bitcoin"></i> </span>
<span class="indicator__caption">Total deposits</span>
</div>
<div class="indicator">
<div class="indicator__img">
<img src="../data/payouts.svg" alt="payouts">
</div>
<span class="indicator__number"><i class="fab fa-bitcoin"></i> </span>
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
<img src="../data/about-img.svg" alt="man" class="about__img">
</div>
</div>
</section>
<div class="features">
<div class="container">
<div class="features-wrap">
<div class="feature" style="background-image: url(../images/bg-feature-1.html);">
<div class="feature__img">
<img src="../data/affiliate.svg" alt="affiliate_programm">
</div>
<h4 class="feature__title">Affiliate programm</h4>
<p class="feature__descr">Get 30% of your partner's deposit to your payment address. All payments are automated.</p>
</div>
<div class="feature" style="background-image: url(../images/bg-feature-2.html);">
<div class="feature__img">
<img src="../data/auto-payouts.svg" alt="automatic_payouts">
</div>
<h4 class="feature__title">Automatic payouts</h4>
<p class="feature__descr">All operations are automated. We use fast and fault-tolerant server solutions. Therefore, in our system no delays. </p>
</div>
<div class="feature" style="background-image: url(../images/bg-feature-3.html);">
<div class="feature__img">
<img src="../data/protection.svg" alt="professional_protection">
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
<th>Date</th>
<th>Transaction</th>
<th>Amount</th>
<th>Status</th>
</tr>
</tbody>
</table>
</div>
<div class="tabs__content-item js-tab-content" style="display: none;" data-tab="output" id="output">
<table class="general-stat-table general-stat__table">
<tbody>
<tr>
<th>Date</th>
<th>Address</th>
<th>Amount</th>
<th>Status</th>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<section class="faq" id="faq" style="background-image: url(../data/bg-faq.svg);">
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
<section class="subscription">
<div class="container">
<h3 class="subtitle subscription__subtitle">Keep up to date with us</h3>
<form action="#" method="post" class="subscription__form subscription-form">
<label for="subscription-email" class="subscription-form__label">
Subscribe now and be the first to hear about our latest news! </label>
<input type="text" name="email" class="subscription-form__input" id="subscription-email" placeholder="Enter your email address">
<button class="subscription-form__button button button-orange" id="subscribe-button">Subscribe</button>
</form>
</div>
</section>
<footer class="footer" style="background-image: url(../images/bg-footer.html);">
<div class="container">
<div class="footer-navbar footer__navbar">
<div class="footer-block footer__block">
<a href="../index.html" class="logo footer__logo">
<img src="../data/logo.svg" alt="logo" class="logo__img">
<span class="logo__title">Crypto-Genius</span>
</a>
</div>
<div class="guide footer__guide">
<span class="guide__title">Menu</span>
<ul class="guide-navigation guide__navigation">
<li><a href="../index.html">Main</a></li>
<li><a href="#statistics">Statistics</a></li>
<li><a href="#faq">F.A.Q</a></li>
</ul>
</div>
<div class="guide contacts footer__guide">
<span class="guide__title">Contacts</span>
<ul class="guide-navigation guide__navigation">
<li><a href="../cdn-cgi/l/email-protection.html#64171114140b161024010a070b174a0810004b"><img src="../data/email-icon.svg" alt="email"><span class="__cf_email__" data-cfemail="2b585e5b5b44595f6b4e4548445805475f4f">[email&#160;protected]</span>/</a></li>
</ul>
</div>
</div>
</div>
<div class="copyright footer__copyright">Copyright © 2020 Crypto-Genius. All rights reserved.</div>
</footer>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
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
<script src="../data/api.js" async="" defer=""></script>
<script src="../data/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="../data/jquery.smooth-scroll.min.js" integrity="sha256-fdhzLBb+vMfwRwZKZPtza9iFcdVtEhrWRHhxSzEy4Ek=" crossorigin="anonymous"></script>
<script src="../data/jquery.gritter.js"></script>
<script src="../data/ddslick.min.js"></script>
<script src="../data/svg4everybody.min.js"></script>
<script src="../data/main.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
<script src="vendor_theme/bootstrap/js/bootstrap.min.html"></script>
<script src="vendor_theme/jquery.cookie/jquery.cookie.html"> </script>
<script src="vendor_theme/owl.carousel/owl.carousel.min.html"></script>
<script src="js/front.html"></script>
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

<!-- Mirrored from Crypto-Genius/rules/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 03:28:26 GMT -->
</html>
</body></html>