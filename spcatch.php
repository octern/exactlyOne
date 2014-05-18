<?php

date_default_timezone_set("America/Los_Angeles");

require_once("../utils/debugwrite.php");

$showErr=1;
$showdebug=1;
$showprinth=1;
showerrors($showErr);

$now = date("Y-m-d H:i:s");
$note = $_REQUEST['note'];
$ratingstr = $_GET['sp'];
$ratings = explode("~",$ratingstr);
print("<BR>ratingstr is $ratingstr<br>");
print_r($ratings);
$floc = "sp.txt";

$out = fopen($floc, "a");


$outstr = "\r\n$now";

foreach($ratings as $rating) {
	$rating = htmlentities($rating);
	echo("currently $outstr");
	$outstr .= "\t$rating";
}

$outstr.="\t$note";

fwrite($out, $outstr);
fclose($out);

echo("set to $rating");