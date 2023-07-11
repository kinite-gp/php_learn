<?php


$a = 8;
$b = 2;
$c = 12.8;

$d = 0;

$c = "12.5";

var_dump($a - $b);echo "<br>";
var_dump($a + $b);echo "<br>";

var_dump($a * $b);echo "<br>";
var_dump($a / $b);echo "<br>";

var_dump($a % $b);echo "<br>";
var_dump($b ** $a);echo "<br>";

var_dump($c);echo "<br>";
var_dump((int) $c);echo "<br>";

var_dump($d);echo "<br>";
var_dump((bool) $d);echo "<br>";

var_dump($c);echo "<br>";
var_dump((int) $c);echo "<br>";

$b = $b + 1;

$var = $b++;

echo "<br>";

echo $var;echo "<br>";
echo $b;echo "<br>";

$var = ++$b;

echo "<br>";

echo $var;echo "<br>";
echo $b;