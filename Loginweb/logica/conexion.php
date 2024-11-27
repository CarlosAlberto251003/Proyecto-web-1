<?php
//2019
//170 000 km 
// trax

//$host_db = "sql205.infinityfree.com";
//$user_db = "if0_37329499";
//$pass_db = "LuTwXV5WfO7ay";
//$db_name = "if0_37329499_test_php";

$host_db = "127.0.0.1";
$user_db = "root";
$pass_db = "Ca2510lb";
$db_name = "test_php";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>