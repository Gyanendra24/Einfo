<?php
session_start();

if(!isset($_SESSION['type']))
    header("location:index.php");


include 'connection.php';
$tea_regno = $_SESSION['t_regno'];
$fetch_4digit_school = $tea_regno[3].$tea_regno[4].$tea_regno[5].$tea_regno[6];
?>



<html>
    <head>
        
        <style>
            body {font-family: Arial;}
            
            .alloated_class{
                color:grey;
                font-size:12px;
                border:1px solid #ccc;
                border-radius:15px;
                padding:16px 35px 16px 35px;
                box-shadow : 0 0 20px grey;
            }
            #alloated_class td:hover{
                box-shadow:0 0 20px black;
            }
            
            .mytext {display:none;}
            #header{
                background-color:#003366;
                position:absolute;
                top:0;
                left:0;
                padding:0px;
                width:100%;
                height:70px;
                z-index:-1;
            } 
            .dropbtn {
    color: white;
    padding:10px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position:absolute;
    top:50px;
    z-index:5;
    right:320px;
    display: inline-block;
    border-radius:10px 10px 0 0;
}

.dropdown-content {
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius:10px 10px 0 0;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    border:1px solid #ccc;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;color:black;}

.dropdown:hover .dropdown-content {display: block;}
<style>

      </style>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--=======================================================================================-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    </head>
        <body>
        <div id="header" style="z-index:5;">
            <img src="logo-einfo-2x.png" style="width:200px;height:120px;margin:15px 0 0 70px;position:fixed;">
        </div>
            <br>
    <div class="dropdown">
        
            <div class="dropdown-content">
                <a href="#" style="border-radius:10px 10px 0 0;"><center><br><br><img src="cart5.png" style="width:50px;height:50px;"><br><?php echo $_SESSION['t_name'];?><br></center></a>
                <a style="width:230px;font-size:13px;">
                Joining Date : 
                    <?php 
                        $doj = $_SESSION['t_doj'];
                        $doj = date('d-m-Y', strtotime($doj));
                        echo $doj;
                    ?><br>    
                Mob. No : <?php echo $_SESSION['t_contact'];?><br>
                DOB : <?php 
                        $dob = $_SESSION['t_dob'];
                        $dob = date('d-m-Y', strtotime($dob));
                        echo $dob;
                    ?><br>
                Address : <?php echo $_SESSION['t_address'];?><br>
                </a>
                <a style="font-size:13px;"> <!-- to display school information  -->
                    <?php
                        
                        $sql = "select school_name,board,contact,address from school where regno like '______$fetch_4digit_school';";
                        $result = mysqli_query($con,$sql);
                        $row = mysqli_fetch_assoc($result);
                        
                        echo "<center><b>TEACHING AT</b></center>".$row['school_name']."<br>";
                        echo "Board : ".$row['board']."<br>";
                        echo "Contact : ".$row['contact']."<br>";
                        echo "Address : ".$row['address']."<br>";
                    
                    ?>               
                </a>
                <a href="change_tea_pass.php?status=0">Change Password</a>
                <a href="logout.php" style="background-color:#ccc;font-size:13px;"><b>Logout</b></a>
            </div>
    </div>
            <span style="position:absolute;top:100px;left:300px;"><img src="setting.gif" style="width:50px;"><b>&nbsp;&nbsp;M A N A G E&nbsp;&nbsp;&nbsp; A C A D E M I C &nbsp;&nbsp;&nbsp; R E C O R D S</b></span>
            <br><br><br><br><br><br><br>
                <!---========================Alloated course to teacher=========================================================-->
            <span style="margin-left:100px;">Alloated Classes with Subjects</span> 
            <hr style="width:800px;margin:10px 0 0 100px;border:1px solid #ccc;"/>
                <?php
                    $sql = "select subject,class,sec from teacher_subject where tea_regno='$tea_regno';";
                    if($result = mysqli_query($con,$sql))
                    {
                        if(mysqli_num_rows($result))
                        {
                            $i=0;
                            echo "<table id ='alloated_class' cellspacing='20' style='margin-left:100px;'><br>
                            <tr>";
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $subject = str_replace(' ','_',$row['subject']);
                                    $class = $row['class'];
                                    $sec = $row['sec'];
                                    echo "<td class='alloated_class'>
                                    <center>
                                    <img src='file_logo.png' style='width:70px;'><br><a href='student_subject_class_list.php?subject=$subject&class=$class&sec=$sec'>
                                    "; $subject = str_replace('_',' ',$subject);
                                    echo "
                                    $subject<br>
                                    Class-$class Sec-$sec</a></center>
                                    </td>";
                                    $i++;
                                    if($i==4)
                                    echo "</tr><tr>";
                     
                                }
                        }
                        else
                            echo "<span style='color:red;margin-left:100px'>Classes Not Alloated</span>";
                    }
                ?>
                        </tr>
                        </table>
            <br>
            <span style="margin-left:100px;">Configure New Exam </span> 
            <hr style="width:800px;margin:10px 0 0 100px;border:1px solid #ccc;"/>
            
            <div style="background-color:#F0F0F0;padding:16px 10px 16px 25px;width:750px;margin:20px 0 0 120px;border-radius:10px 10px 0 10px;">
                <form method="POST" action="academic_php.php">
                    <?php
                        $sql = "select distinct(subject) from teacher_subject where tea_regno='$tea_regno';";
                        if($result = mysqli_query($con,$sql))
                        {
                            if(mysqli_num_rows($result))
                            {
                               
                    ?>
                    <table cellspacing="15" style="font-size:13px">
                        <tr>
                            <td>
                                Subject
                                <select name="subject" style="width:100px">
                                    <?php
                                         while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<option>".$row['subject']."</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                            <td>
                                Class
                                <select name="class" style="width:100px;">
                                    <?php
                                $sql = "select distinct(class) from teacher_subject where tea_regno='$tea_regno';";
                                        $result=mysqli_query($con,$sql);
                                         while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<option>".$row['class']."</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                            <td>
                                Section
                                <select name="sec" style="width:100px;">
                                    <?php
                                $sql = "select distinct(sec) from teacher_subject where tea_regno='$tea_regno' order by sec;";
                                        $result=mysqli_query($con,$sql);
                                         while($row = mysqli_fetch_assoc($result))
                                        {
                                            echo "<option>".$row['sec']."</option>";
                                        }
                                    ?>
                                </select>
                            </td>
                            <td>
                                Purpose
                                <select name="purpose">
                                    <option disabled>Academic</option>
                                    <option>Test 1</option>
                                    <option>Test 2</option>
                                    <option>Test 3</option>
                                    <option>Test 4</option>
                                    <option>Practice Test</option>
                                    <option>Half Yearlly</option>
                                    <option>Annual Yearlly</option>
                                    <option>Final</option>
                                    <option>Non Acadmic</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><br>Discription <input type="text" name="disc" placeholder="short discription" style="border:1px solid grey;border-radius:5px;height:40px;width:300px;" required></td>
                        </tr>
                    </table>
                    <?php
                          }
                   }
                    ?>
                    </div>
                <input type="submit" value="Create" style="padding:9px 50px 9px 50px;margin-left:718px;border-radius:0 0 0 10px;">
                    
                </form>
            <br><br>
            <span style="margin-left:100px;">Exam Records</span> 
            <hr style="width:800px;margin:10px 0 0 100px;border:1px solid #ccc;"/>
            <?php
                    $sql = "select DISTINCT subject,class,sec,purpose,disc from academic where tea_regno='$tea_regno';";
                    if($result = mysqli_query($con,$sql))
                    {
                        if(mysqli_num_rows($result))
                        {
                            $i=0;
                            echo "<table id ='alloated_class' cellspacing='20' style='margin-left:100px;'><br>
                            <tr>";
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $subject = str_replace(' ','_',$row['subject']);
                                    $class = $row['class'];
                                    $sec = $row['sec'];
                                    $purpose = str_replace(' ','_',$row['purpose']);
                                    $disc = str_replace(' ','_',$row['disc']);
                                    echo "<td class='alloated_class'>
                                    <center>
                                    <img src='file_logo.png' style='width:50px;'><br><a href='academic_entry.php?subject=$subject&class=$class&sec=$sec&purpose=$purpose&disc=$disc'>
                                    "; 
                                    $subject = str_replace('_',' ',$subject);
                                    $purpose = str_replace('_',' ',$purpose);
                                    echo "
                                    $subject<br>
                                    Class-$class Sec-$sec<br>$purpose
                                    </a><br>
                                    ";
                                    $subject = str_replace(' ','_',$subject);
                                    $purpose = str_replace(' ','_',$purpose);
                                    echo "
                                    <a href='delete_academic_php.php?subject=$subject&class=$class&sec=$sec&purpose=$purpose&disc=$disc'><img src='delete.png' style='width:20px;'></a>
                                    </center>
                                    </td>";
                                    $i++;
                                    if($i==4)
                                    {
                                        $i=0;
                                        echo "</tr><tr>";
                                    }
                     
                                }
                            echo "</tr>
                        </table>";
                        }
                        else
                            echo "<span style='color:red;margin-left:100px;'>No Record</span>";
                    }
                ?>
                        
            <br>
            <br>
            <br><br><br>
<div style="width:100%;padding:100px;color:white;background-color:#ccc;">
                    <span style="color:#003152"><b>To Contact Us</b><br>
                        Email : einfoservice@einfo.com<br>
                    <i>Feel free to Email your queries</i></span>
                </div>
                <div style="background-color:#003152;padding:10;text-align:center;color:white">
                    
                    &copy; Copyright 2018-<?php echo date('Y');?>
                    
                </div>
    </body>
</html>

<?php mysqli_close($con);?>