#!/usr/bin/php -q
<?php
include "phpagi.php";

$agi = new AGI();
$agi->answer();
$agi->say_number("123");
$agi->say_digits("123");
$arr = array();
$res = exec("ls -l /var/spool/asterisk/voicemail/default/620/INBOX",$arr);
$agi->verbose("***********************\n \n". var_dump($arr)." \n \n **************************");
$agi->exec("wait","2");

$agi->hangup();