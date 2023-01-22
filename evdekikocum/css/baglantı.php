<?php
session_start();
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "evdekikocum";  
  
if(!$con = mysqli_connect($host, $user, $password, $db_name)) {
    die("Bağlantı Hatası");
}
mysqli_set_charset($con, "UTF-8");