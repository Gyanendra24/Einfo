<?php
session_start();
include 'connection.php';
$stu_regno=$_SESSION['stu_regno'];
$oldp = $_POST['oldp'];
$newp = $_POST['newp'];
$sql = "Select * from student where stu_regno='$stu_regno';";
if($result = mysqli_query($con,$sql))
{
        $row = mysqli_fetch_assoc($result);
        if($row['password']==$oldp)
        {
            $sql = "update student set password='$newp' where stu_regno='$stu_regno';";
            if(mysqli_query($con,$sql))
            {
               // echo "<script type='text/javascript'>alert('Updated Successfully')</script>";
                header("location:welcome_student.php?status=0");
            }
            
        }
        else
            {
                header("location:change_stu_pass.php?status=1");
            }
            
}else
    echo "not wrnging";

?>