<?php

$list_ex = [
    "1",
    "2",
    "3",
    "4",
    "5",
    "6",
    "stop",
    "8",
    "9",
    "10",
];

foreach ($list_ex as $item){
    if ($item != "stop") {
        echo "$item <br>";
    } else {break;}
}
