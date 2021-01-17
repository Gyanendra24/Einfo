<?php
session_start();
include 'connection.php';
$tea_regno = $_GET['tea_regno'];
$name = $_POST['fname'];
$fcno = $_POST['fcno'];
$faddr = $_POST['faddr'];
$dob = $_POST['date'];
        $dob = str_replace('/', '-', $dob);
        $dob = date('Y-m-d', strtotime($dob));
$doj = $_POST['doj'];
        $doj = str_replace('/', '-', $doj);
        $doj = date('Y-m-d', strtotime($doj));
$dot = $_POST['dot'];
        $dot = str_replace('/', '-', $dot);
        $dot = date('Y-m-d', strtotime($dot));
    
    $subject1=$_POST['subject1'];
    $subject1_class=$_POST['subject1_class'];
    $subject1_sec=$_POST['subject1_sec'];
    
    $subject2=$_POST['subject2'];
    $subject2_class=$_POST['subject2_class'];
    $subject2_sec=$_POST['subject2_sec'];
    
    $subject3=$_POST['subject3'];
    $subject3_class=$_POST['subject3_class'];
    $subject3_sec=$_POST['subject3_sec'];
    
    $subject4=$_POST['subject4'];
    $subject4_class=$_POST['subject4_class'];
    $subject4_sec=$_POST['subject4_sec'];
    
    $subject5=$_POST['subject5'];
    $subject5_class=$_POST['subject5_class'];
    $subject5_sec=$_POST['subject5_sec'];

$sql = "Update teacher1 set name='$name', contact='$fcno', address='$faddr', dob='$dob', doj='$doj', dot='$dot' where tea_regno='$tea_regno';";

$sql .= "delete from teacher_subject where tea_regno = '$tea_regno';";
        //subject1
        $sql .= "insert into teacher_subject values('$tea_regno','$subject1','$subject1_class','$subject1_sec');";
        //subject2
        $sql .= "insert into teacher_subject values('$tea_regno','$subject2','$subject2_class','$subject2_sec');";
        //subject3
        $sql .= "insert into teacher_subject values('$tea_regno','$subject3','$subject3_class','$subject3_sec');";
        //subject4
        $sql .= "insert into teacher_subject values('$tea_regno','$subject4','$subject4_class','$subject4_sec');";
        //subject5
        $sql .= "insert into teacher_subject values('$tea_regno','$subject5','$subject5_class','$subject5_sec');";
        //delete
        $sql .= "Delete from teacher_subject where tea_regno='$tea_regno' AND (subject='select' OR class='select' OR sec='select');";
    

if(mysqli_multi_query($con,$sql))
{
    //echo $sql;
    header("Location:teacher_info_edit.php?update_msg_status=1&tea_regno=$tea_regno");
}
else
    echo "Something went wrong!!";


mysqli_close($con);
?>