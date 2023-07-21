<?php
try {
    $connect = mysqli_connect("localhost:3306","root","");
} catch (mysqli_sql_exception $exception) {
    echo $exception->getMessage();
    exit();
}

mysqli_select_db($connect,"switch");
$ip = '192.168.1.1';
$port = '3060';
$username = 'mehdie';
$datetime = '20237211041';
$query = "INSERT INTO configs (ip , port , username , datetime) values ('$ip','$port','$username','$datetime');";
$result = mysqli_query($connect,$query);
var_dump($result);

mysqli_close($connect);