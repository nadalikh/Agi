#!/usr/bin/php -q
<?php
require 'phpagi.php';
$agi = new AGI();
$agi->answer();
$agi->say_digits("123");
$agi->exec("wait", 3);
$agi->stream_file("hello-world");
$agi->hangup();

?>
