<?php
session_start();
include 'connection.php';
    $stu_regno = $_GET['stu_regno'];
    $name = ucwords($_POST['name']);
    $class = $_POST['class'];
    $sec = $_POST['sec'];
    $addr = ucwords($_POST['addr']);
    $dob = $_POST['date'];
        $dob = str_replace('/', '-', $dob);
        $dob = date('Y-m-d', strtotime($dob));
    $gname = ucwords($_POST['gname']);
    $gcno = $_POST['gcno'];
    
    $sql = "Update student set name='$name', class='$class', sec='$sec', address='$addr', dob='$dob', gname='$gname', gcontact=$gcno where stu_regno='$stu_regno';";
    
    if(mysqli_query($con,$sql))
    {
        header("Location:student_info_edit.php?stu_regno=$stu_regno&update_msg_status=1");
    }
else
    echo "Some problem occor!!";

mysqli_close($con);
?>