#!/usr/bin/php -q
<?php
//require __DIR__."/vendor/autoload.php";
include "phpagi.php";
$agi = new AGI();
//$callerid = $agi->get_variable("CALLERID(name)");
$agi->verbose("************************\n"."\n***********************************");
$agi->hangup();