<?php
include 'connection.php';
session_start();
$count=(int)$_POST['count'];
$subject = str_replace('_',' ',$_GET['subject']);
$class = $_GET['class'];
$sec = $_GET['sec'];
$purpose = str_replace('_',' ',$_GET['purpose']);
$disc = str_replace('_',' ',$_GET['disc']);
$i=0;
while($count>0)
{
    $i++;
    $sql = "update academic set ob=".$_POST["ob$i"].", mm=".$_POST['mm']." where stu_regno='".$_POST["reg$i"]."' and subject='$subject' and class='$class' and sec='$sec' and purpose='$purpose' and disc='$disc';";
    if(mysqli_query($con,$sql))
    {   
        header("Location:academic_entry.php?subject=$subject&class=$class&sec=$sec&purpose=$purpose&disc=$disc");
    }else
        echo "\n".$sql." - unsuccessful updated - ".$count."\n";
    $count = $count-1;
}

?>
