<?php
    session_start();
    include 'connection.php';
    $tea_regno = $_SESSION['t_regno'];
    $fetch_4digit_school = $tea_regno[3].$tea_regno[4].$tea_regno[5].$tea_regno[6];

    $subject = $_POST['subject'];
    $class = $_POST['class'];
    $sec = $_POST['sec'];
    $purpose =$_POST['purpose'];
    $disc = $_POST['disc'];
    
    $check_before_insert = "select tea_regno from academic where subject='$subject' and class='$class' and sec='$sec' and tea_regno='$tea_regno' and purpose='$purpose' and disc='$disc';";
    if(mysqli_num_rows(mysqli_query($con,$check_before_insert))!=0)
    {
        echo "Entry already Exist for this Configuration";
    }
    else
    {
    $sql = "select stu_regno from student where class = '$class' and sec='$sec' and regno like '______$fetch_4digit_school';";
    if($result=mysqli_query($con,$sql))
    {
        if(mysqli_num_rows($result))
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $stu_regno = $row['stu_regno'];
                $sql2 = "insert into academic values('$tea_regno','$stu_regno','$subject','$class','$sec','$purpose','$disc',0,0);";
                if(mysqli_query($con,$sql2))
                {
                    
                }else 
                  echo "something went wrong in academic_php.php!! ";  
            }
            header('Location:welcome_teacher.php');
            
        }else
            echo "no student data found";
    }
    }
?>