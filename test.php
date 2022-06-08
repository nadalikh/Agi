#!/usr/bin/php -q
<?php
include "phpagi.php";
$agi = new AGI();
$agi->answer();
$agi->wait_for_digit(20);
$agi->verbose("***********herereee************");
$agi->hangup();