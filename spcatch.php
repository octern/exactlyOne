<?php

date_default_timezone_set("America/Los_Angeles");

require_once("../utils/debugwrite.php");

$showErr=1;
$showdebug=1;
$showprinth=1;
showerrors($showErr);

$now = date("Y-m-d H:i:s");
$rating = intval($_REQUEST['sp']);
$note = $_REQUEST['note'];
$floc = "sp.txt";

$out = fopen($floc, "a");

fwrite($out, "\r\n$now\t$rating\t$note");
fclose($out);

echo("set to $rating");