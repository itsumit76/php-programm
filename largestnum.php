<?php
/* Q.Write a PHP program to find the largest of three numbers using ternary
Operator
*/

$fn= 879;
$sn= 589;
$tn= 985;

  echo ($fn>$sn && $fn>$tn )?"$fn is largest number":"$fn is not largest num"."<br>";
  echo ($sn>$fn && $sn>$tn )?"$sn is largest number":"$sn is not largest num"."<br>";
  echo ($tn>$fn && $tn>$sn )?"$tn is largest number":"$tn is not largest num"."<br>";

?>