<?php
$localhost='localhost';
$username='root';
$password='';
$dbName='sto_plypal';
$conn=mysqli_connect($localhost,$username,$password,$dbName);
if(!$conn){
    die("Connection Filed :".mysqli_connect_error());
}