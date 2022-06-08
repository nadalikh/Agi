#!/usr/bin/php -q
<?php
include "phpagi.php";

$agi = new AGI();
$agi->exec("wait","15");
$agi->answer();
$agi->say_number("123");
$agi->say_digits("123");
$agi->verbose("***********herereee************");
$agi->hangup();