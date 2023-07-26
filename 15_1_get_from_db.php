<?php
try {
    $connect = mysqli_connect("localhost:3306","root","");
} catch (mysqli_sql_exception $exception) {
    echo $exception->getMessage();
    exit();
}


mysqli_select_db($connect,"switch");
$query = "select * from configs";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_all($result);
var_dump($result);

mysqli_close($connect);

