<?php
try {
    $connect = mysqli_connect("localhost:3306","root","");
} catch (mysqli_sql_exception $exception) {
    echo $exception->getMessage();
    exit();
}
var_dump($connect);

mysqli_close($connect);