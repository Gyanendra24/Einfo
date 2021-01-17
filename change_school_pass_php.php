<?php
session_start();
include 'connection.php';
$school_regno=$_SESSION['school_regno'];
$oldp = $_POST['oldp'];
$newp = $_POST['newp'];
$sql = "Select * from school where regno='$school_regno';";
if($result = mysqli_query($con,$sql))
{
        $row = mysqli_fetch_assoc($result);
        if($row['password']==$oldp)
        {
            $sql = "update school set password='$newp' where regno='$school_regno';";
            if(mysqli_query($con,$sql))
            {
               // echo "<script type='text/javascript'>alert('Updated Successfully')</script>";
                header("location:welcome_school.php?");
            }
            
        }
        else
            {
                header("location:change_school_pass.php?status=1");
            }
            
}else
    echo "not wrnging";

?>