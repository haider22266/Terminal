<?php

$host_name='localhost';
$name='root';
$password='';
$db='transport';
$con=mysqli_connect($host_name,$name,$password) or die('Database Error');
mysqli_select_db($con,$db);

?>