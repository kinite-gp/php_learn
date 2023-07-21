<?php


$list_one = ["hesam", "reza", "mehdi","ali"];
$list_two = [1,2,3,4];
$os = array("Mac", "NT", "Irix", "Linux");

array_push($list_one,"hamid");
print_r(($list_one));echo "<br>";

print_r(array_flip($list_one));echo "<br>";

print_r(array_keys($list_one));echo "<br>";
print_r(array_values($list_one));echo "<br>";



if (in_array("Irix", $os)) {
    echo "Got Irix";
}echo "<br>";

echo count($list_two);echo "<br>";

echo array_rand($list_two);
