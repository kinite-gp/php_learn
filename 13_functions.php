<?php


$number = 0;
$list = [0,2,4,8,16,32,64,128];

function subtraction($a , $b) {
    return $a - $b;
}

function multiplication(int | float $a ,int | float $b = 2) : float | int {
    return $a * $b;
}

function multiplier(...$list) {
    $final_number = 0;
    foreach ($list as $number) {
        $final_number = $final_number + $number;
    }
    return $final_number;
}

function add_to_number(int $count, int $i = 0) : int {
    global $number;
    for ($i = 0; $i < $count ; $i++) {
        $number++;
    }
    return $number;
}


$say_hi_echo_number = function () use ($number) {
    echo "hi<br>";
    echo $number;
};




echo subtraction(12, 2)."<br>";
echo multiplication(4)."<br>";
echo multiplier(...$list)."<br>";
echo add_to_number(10)."<br>";
$say_hi_echo_number();
