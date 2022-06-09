#!/usr/bin/php -q
<?php
include "phpagi.php";

$agi = new AGI();
$agi->answer();

$res = exec("ls /var/spool/asterisk/voicemail/default/620/INBOX",$arr);
$agi->verbose("***********************\n \n". var_dump($arr)." \n \n **************************");
$agi->say_number("123");
$agi->say_digits("123");
$arr = array();
$agi->exec("wait","2");

$agi->hangup();