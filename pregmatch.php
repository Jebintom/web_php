<?php
$str="the rain iin spain falls mainly on thr plains";
$pattern="/AIN/";
echo preg_match_all($pattern,$str)."<br>";
echo preg_match("/ca+t/","caaaaat")."<br>";
echo preg_match("/ca*t/","ct")."<br>";
echo preg_match("/ca+t/","caaaaat")."<br>";
echo preg_match("/[a-z]/","1233")."<br>";

$str= "visit microsoft";
$pattern="/microsoft/";
echo preg_replace($pattern,"sjcet",$str);
?>
