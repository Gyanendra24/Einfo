<?php
session_start();
include 'connection.php';

$reg = strtoupper($_POST['regno']);
$sname = ucwords($_POST['schoolname']);
$board = $_POST['board'];
$saddr = ucwords($_POST['addr']);
$oname = ucwords($_POST['oname']);
$contact = $_POST['cno'];
$pass = $_POST['pass'];

$sql = "insert into school values('$reg','$sname','$board','$saddr','$oname',$contact,'$pass');";

if(mysqli_query($con,$sql))
    header("Location:weladmin.php?flag=1");
else
    header("Location:weladmin.php?flag=0");
mysqli_close($con);
?>