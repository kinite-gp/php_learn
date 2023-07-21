<?php

$array_ex_1 = array(
    "hello",
    "1",
    1,
    12.3,
    true,
);


$array_ex_2 = array(
    1 => "hello",
    2 => "1",
    3 => 1,
    4 => 12.3,
    5 => true,
);


$array_ex_3 = array(
    "string" => "hello",
    "string_num" => "1",
    "int" => 1,
    "float" => 12.3,
    "status" => true,
);


$array_ex_4 = [
    "hello",
    "1",
    1,
    12.3,
    true,
];


var_dump($array_ex_1[2]);
echo "<hr>";
var_dump($array_ex_2[2]);
echo "<hr>";
var_dump($array_ex_3["string"]);
echo "<hr>";
var_dump($array_ex_4[2]);