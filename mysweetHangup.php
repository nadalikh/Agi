#!/usr/bin/php -q
<?php
include "phpagi.php";
$agi = new AGI();
$name = $agi->get_variable("CALLERID(name)")['data'];
$src = $agi->get_variable("CDR(src)")['data'];
$disposition = $agi->get_variable("CDR(disposition)")['data'];
$duration = $agi->get_variable("CDR(duration)")['data'];
$start = $agi->get_variable("CDR(start)")['data'];
$end = $agi->get_variable("CDR(end)")['data'];
$answer = $agi->get_variable("CDR(answer)")['data'];
$lastapp = $agi->get_variable("CDR(lastapp)")['data'];

//$message = "name+%3A+".$name."%0A%0A";
    $message = "🛑+name+:+$name,";
    $message = "🛑+caller+id+:+$src,";
//$message .= "🛑 caller+id+:+".$src."%0A%0A";
//$message .= "🛑 started at+:+".$start."%0A%0A";
//$message .= "🛑 duration+:+".$duration."%0A%0A";
//$message .= "🛑 ended+at+:+".$end."%0A%0A";
//$message .= "🛑 answered+at+:+".$answer."%0A%0A";
//$message .= "🛑 last+app+at+:+".$answer."%0A%0A";
$agi->verbose("**********************\n".$message."\n********************************\n");
$ch = curl_init();
curl_setopt_array(
    $ch, array(
    CURLOPT_URL => 'https://nkhpro.ir:88/testcurl.php?chat_id=668578590&message='.$message,
    CURLOPT_RETURNTRANSFER => true
));
$output = curl_exec($ch);

