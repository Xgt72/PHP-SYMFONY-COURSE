<?php
$firstMessage = '0@sn9sirppa@#?ia\'jgtvryko1';
$secondMessage = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$thirdMessage = 'aopi?sgnirts@#?sedhtg+p9l!';

$keyNumber = strlen($firstMessage) / 2;
$subMessage = substr($firstMessage, 5, $keyNumber);
$subMessage = str_replace(['@', '#', '?'], ' ', $subMessage);
$subMessage = strrev($subMessage);
echo $subMessage . PHP_EOL;

$keyNumber = strlen($secondMessage) / 2;
$subMessage = substr($secondMessage, 5, $keyNumber);
$subMessage = str_replace(['@', '#', '?'], ' ', $subMessage);
$subMessage = strrev($subMessage);
echo $subMessage . PHP_EOL;

$keyNumber = strlen($thirdMessage) / 2;
$subMessage = substr($thirdMessage, 5, $keyNumber);
$subMessage = str_replace(['@', '#', '?'], ' ', $subMessage);
$subMessage = strrev($subMessage);
echo $subMessage;
?>