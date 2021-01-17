<?php
session_start();
include 'connection.php';
$tea_regno=$_SESSION['t_regno'];
$oldp = $_POST['oldp'];
$newp = $_POST['newp'];
$sql = "Select * from teacher1 where tea_regno='$tea_regno';";
if($result = mysqli_query($con,$sql))
{
        $row = mysqli_fetch_assoc($result);
        if($row['password']==$oldp)
        {
            $sql = "update teacher1 set password='$newp' where tea_regno='$tea_regno';";
            if(mysqli_query($con,$sql))
            {
               // echo "<script type='text/javascript'>alert('Updated Successfully')</script>";
                header("location:welcome_teacher.php?");
            }
            
        }
        else
            {
                header("location:change_tea_pass.php?status=1");
            }
            
}else
    echo "not wrnging";

?>