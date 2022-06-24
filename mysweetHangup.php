#!/usr/bin/php -q
<?php
require __DIR__."/vendor/autoload.php";
include "phpagi.php";
$bot_api_key  = '5362421313:AAGQm8uLoOFlVHk56ZVVAJJmTBKGIJfqYq0';
$bot_username = 'nkhTestPhp_bot';
$tel = new Telegram($bot_api_key);
$agi = new AGI();
//$callerid = $agi->get_variable("CALLERID(name)");
//$agi->verbose("************************\n".$callerid['data']."\n***********************************");
$res = $tel->sendMessage(['chat_id'=>"668578590", 'text'=> "you had call from"]);
$agi->verbose("************************\n".$res."\n***********************************");
