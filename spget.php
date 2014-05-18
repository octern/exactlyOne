<?php

require_once("../utils/debugwrite.php");

//echo("????");
$showErr=1;
$showdebug=1;
$showprinth=1;
showerrors($showErr);

$dat = file("sp.txt");
//print_h($dat);
$datum1 = $dat[count($dat)-1];
// print_h($datum1);
$datum2 = str_replace("\t", "~", $datum1);
// print_h($datum2);
// print_h($datum2[count($datum2)-2], "datum 2 element");
// // print_h(explode("\t", $dat[count($dat)-1]));
// // print_h($dat);
echo($datum2);