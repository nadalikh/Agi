#!/usr/bin/php -q
<?php
include "phpagi.php";
$agi = new AGI();
$name = $agi->get_variable("CALLERID(name)")['data'];
$src = $agi->get_variable("CDR(src)")['data'];
$disposition = $agi->get_variable("CDR(disposition)")['data'];
$duration = $agi->get_variable("CDR(duration)")['data'];
$start = explode(" ",$agi->get_variable("CDR(start)")['data']);
$end = explode(" ",$agi->get_variable("CDR(end)")['data']);
$answer = explode(" ",$agi->get_variable("CDR(answer)")['data']);

$message = "🛑+name+:+$name,";
$message .= "🛑+caller+id+:+$src,";
$message .= "🛑+started+at+:+$start[0]+$start[1],";
$message .= "🛑+duration+:+$duration,";
$message .= "🛑+ended+at+:+$end[0]+$end[1],";
$message .= "🛑+answered+at+:+$answer[0]+$answer[1],";
$s = $start[0]." ".$start[1];
$db = new mysqli("localhost", "root","expecto-patronum1379","app");
if($db->connect_error)
    die("connection faild to db: ". $db->connect_error);
$db->query("insert into mysweet_cdr (name, callder_id, duration, started, ended, answered) VALUES ('$name', '$src', '$s', '$duration', '$end[0] $end[1]', '$answer[0] $answer[1]')");

$ch = curl_init();
curl_setopt_array(
    $ch, array(
    CURLOPT_URL => 'https://nkhpro.ir:88/testcurl.php?chat_id=668578590&message='.$message,
    CURLOPT_RETURNTRANSFER => true
));
$output = curl_exec($ch);

