#!/usr/bin/php -q
<?php
include "phpagi.php";
$agi = new AGI();
$callerid = $agi->get_variable("CALLERID(name)");
//$agi->verbose("************************\n".$callerid['data']."\n***********************************");
$ch = curl_init();
curl_setopt_array(
    $ch, array(
    CURLOPT_URL => 'https://nkhpro.ir:88/testcurl.php?chat_id=668578590&message=you+have+message+from+'.$callerid['data'],
    CURLOPT_RETURNTRANSFER => true
));
$output = curl_exec($ch);
$agi->verbose("************************\n"."\n***********************************");
