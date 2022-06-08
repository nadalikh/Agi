#!/usr/bin/php -q
<?php
include "phpagi.php";
$agi = new AGI();
$agi->answer();
$agi->exec("wait", "20");
$agi->verbose("***********herereee************");
$agi->hangup();