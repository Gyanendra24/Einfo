<?php

$cname = $_POST['cname'];
$cemail = $_POST['cemail'];
$cmsg = $_POST['msg'];

include 'connection.php';

$sql="insert into contract values('$cname','$cemail','$cmsg');";
mysqli_query($con,$sql);

    header("location:index.php");

?>