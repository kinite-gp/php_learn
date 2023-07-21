<?php


$string = "  \t\t\t this is simple string  \t\t\t ";
$arry = ["this","is","simple","arraye"];
$str = "A 'quote' is <b>bold</b>";
$int = 24400000000;


echo $string."<br>";
var_dump(explode(" ",$string));echo "<br>";

echo implode(" ",$arry);echo "<br>";
echo join("-", $arry);echo "<br>";

echo htmlentities($str);;echo "<br>";
echo html_entity_decode(htmlentities($str));;echo "<br>";

echo ltrim($string," t");;echo "<br>";
echo rtrim($string," ng");;echo "<br>";

echo number_format($int);echo "<br>";
echo number_format($int,3,".",",");echo "<br>";

echo ord("A");echo "<br>";
echo chr(65);echo "<br>";

parse_str("name=ali",$final);
var_dump($final);echo "<br>";

print $string;echo "<br>";

printf("this is number %d.", $int);echo "<br>";
echo sprintf("this is number %d",$int);echo "<br>";


list($serial) = sscanf("SN/2350001", "SN/%d");
$mandate = "January 01 2000";
list($month, $day, $year) = sscanf($mandate, "%s %d %d");
echo "Item $serial was manufactured on: $year-" . substr($month, 0, 3) . "-$day\n";;echo "<br>";

echo str_repeat("*",10);echo "<br>";
echo str_replace(" is"," a",$string);echo "<br>";

echo strstr($string," is");echo "<br>";

echo strtoupper($string);echo "<br>";
//echo strtolower($string);

echo strlen($string);echo "<br>";

echo strrev($string);echo "<br>";

var_dump(trim($string));echo "<br>";
var_dump($string);echo "<br>";

echo substr($string, 7,-7);