<?php
include 'connection.php';
session_start();
$tea_regno = $_SESSION['t_regno'];
$subject = str_replace('_',' ',$_GET['subject']);
$class = $_GET['class'];
$sec = $_GET['sec'];
$purpose = str_replace('_',' ',$_GET['purpose']);
$disc = str_replace('_',' ',$_GET['disc']);

$sql = "delete from academic where tea_regno='$tea_regno' and subject='$subject' and class='$class' and sec='$sec' and purpose='$purpose' and disc='$disc';";

if(mysqli_query($con,$sql))
{
    header("Location:welcome_teacher.php");
}else
        echo "deletion not done, something went wrong in delete_academic_php.php";

?>