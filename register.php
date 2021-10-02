<?php

$host='localhost';
$username='root';
$password='';
$conn=mysqli_connect($host,$username,$password);

if(!$conn)
{
    die("Couldn't connect to server");
}
else
{
    echo "Successfully Connected!";
}

$db="CREATE DATABASE student";
mysqli_query($conn,$db);

mysqli_select_db($conn,'student');

$td="CREATE TABLE login(Name VARCHAR(20) PRIMARY KEY,Password VARCHAR(20))";
mysqli_query($conn,$td);

?>