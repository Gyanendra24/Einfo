<?php

session_start();


if(!isset($_SESSION['type']))
    header("location:index.php");




$school=$_SESSION['school_regno'];
$last_school_digit = $school[6].$school[7].$school[8].$school[9];
$success_student=0;
$success_teacher1=0;
$total_student=0;
$total_teacher=0;
include 'connection.php';
//======================================STUDENT AND TEACHER COUNT==================================
$sql = "select * from student where stu_regno like 'STU".$last_school_digit."%';";
if($result=mysqli_query($con,$sql))
{
    $total_student=mysqli_num_rows($result);
    
}

$sql = "select * from teacher1 where tea_regno like 'TEA".$last_school_digit."%';";
if($result=mysqli_query($con,$sql))
{
    $total_teacher=mysqli_num_rows($result);
}
//============================STUDENT=======================================================================================================
//last-student-no-=====================================================================
$sql = "select stu_regno from student where regno='$school';";
$result = mysqli_query($con,$sql);
$last_reg_student=0;

if (mysqli_num_rows($result)) 
{
    while($row = mysqli_fetch_assoc($result))
    {
        $last_reg_student = $row['stu_regno'];
    }
}

//======================================================================================

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit_student']))
{
    //echo "inside student------------------------------------------------------------------------------------------";
    $name = ucwords($_POST['name']);
    $class = $_POST['class'];
    $sec = $_POST['sec'];
    $addr = ucwords($_POST['addr']);
    $dob = $_POST['date'];
        $dob = str_replace('/', '-', $dob);
        $dob = date('Y-m-d', strtotime($dob));
    $gname = ucwords($_POST['gname']);
    $gcno = $_POST['gcno'];
    
    if($last_reg_student=='0')
    {
        $sql = "insert into student values('STU".$last_school_digit."111','$name','$class','$sec','$addr','$dob','$gname',$gcno,'stu".$last_school_digit."111','$school');";
        $new_student_reg_no = 'STU'.$last_school_digit.'111';
    }
    else
    {
        $x = $last_reg_student[7].$last_reg_student[8].$last_reg_student[9];
        $x = $x+1;
        
        $sql = "insert into student values('STU".$last_school_digit.$x."','$name','$class','$sec','$addr','$dob','$gname',$gcno,'stu".$last_school_digit.$x."','$school');";
         $new_student_reg_no = 'STU'.$last_school_digit.$x;
    } 
    
    if(mysqli_query($con,$sql))
    {
        $success_student=1;
        $last_reg_student = $new_student_reg_no;
    }
    
}
//==========================teacher11=======================================================================================================
//last-teacher11-no-=====================================================================
$sql = "select tea_regno from teacher1 where regno='$school';";
$result = mysqli_query($con,$sql);
$last_reg_teacher1=0;

if (mysqli_num_rows($result)) 
{
    while($row = mysqli_fetch_assoc($result))
    {
        $last_reg_teacher1 = $row['tea_regno'];
    }
}

//======================================================================================

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit_teacher1']))
{
    //echo "inside teacher------------------------------------------------------------------------------------------";
    $fname = ucwords($_POST['fname']);
    $faddr = ucwords($_POST['faddr']);
    $dob = $_POST['date'];
        $dob = str_replace('/', '-', $dob);
        $dob = date('Y-m-d', strtotime($dob));
    $doj = $_POST['doj'];
        $doj = str_replace('/', '-', $doj);
        $doj = date('Y-m-d', strtotime($doj));
    $fcno = $_POST['fcno'];
    
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
    
    if($last_reg_teacher1=='0')
    {
        $sql = "insert into teacher1 values('TEA".$last_school_digit."111','$fname','$fcno','$dob','$faddr','$doj','0000-00-00','tea".$last_school_digit."111','$school');";
        $new_teacher1_reg_no = 'TEA'.$last_school_digit.'111';
        //subject1
        $sql .= "insert into teacher_subject values('$new_teacher1_reg_no','$subject1','$subject1_class','$subject1_sec');";
        //subject2
        $sql .= "insert into teacher_subject values('$new_teacher1_reg_no','$subject2','$subject2_class','$subject2_sec');";
        //subject3
        $sql .= "insert into teacher_subject values('$new_teacher1_reg_no','$subject3','$subject3_class','$subject3_sec');";
        //subject4
        $sql .= "insert into teacher_subject values('$new_teacher1_reg_no','$subject4','$subject4_class','$subject4_sec');";
        //subject5
        $sql .= "insert into teacher_subject values('$new_teacher1_reg_no','$subject5','$subject5_class','$subject5_sec');";
        //delete
        $sql .= "Delete from teacher_subject where tea_regno='$new_teacher1_reg_no' AND (subject='select' OR class='select' OR sec='select');";
    }
    else
    {
        $x = $last_reg_teacher1[7].$last_reg_teacher1[8].$last_reg_teacher1[9];
        $x = $x+1;
        
        $sql = "insert into teacher1 values('TEA".$last_school_digit.$x."','$fname','$fcno','$dob','$faddr','$doj','0000-00-00','tea".$last_school_digit.$x."','$school');";
        $new_teacher1_reg_no = 'TEA'.$last_school_digit.$x;
        //subject1
        $sql .= "insert into teacher_subject values('$new_teacher1_reg_no','$subject1','$subject1_class','$subject1_sec');";
        //subject2
        $sql .= "insert into teacher_subject values('$new_teacher1_reg_no','$subject2','$subject2_class','$subject2_sec');";
        //subject3
        $sql .= "insert into teacher_subject values('$new_teacher1_reg_no','$subject3','$subject3_class','$subject3_sec');";
        //subject4
        $sql .= "insert into teacher_subject values('$new_teacher1_reg_no','$subject4','$subject4_class','$subject4_sec');";
        //subject5
        $sql .= "insert into teacher_subject values('$new_teacher1_reg_no','$subject5','$subject5_class','$subject5_sec');";
        //delete
        $sql .= "Delete from teacher_subject where tea_regno='$new_teacher1_reg_no' AND (subject='select' OR class='select' OR sec='select');";
        
        echo "<script type='text/javascript'>alert('$sql')</script>";
    } 
    
    if(mysqli_multi_query($con,$sql))
    {
        $success_teacher1=1;
        $last_reg_teacher1 = $new_teacher1_reg_no;
    }
}

?>



<html>
    <head>
        
        <style>
body {font-family: Arial;}
#student-info {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#student-info td, #student-info th {
    border: 1px solid #ddd;
    padding: 8px;
}

#student-info tr:nth-child(even){background-color: white;}

#student-info tr:hover {background-color: #ccc;}

#student-info th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: rgb(24,24,24);
    color: white;
}
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width:750px;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    background-color:#f6f6f6;
    border-top: none;
    width:750px;
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
    top:5px;
    right:150px;
    z-index:5;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

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
            <img src="logo-einfo-2x.png" style="width:200px;height:120px;margin:15px 0 0 70px;position:fixed;z-index:1;">
        </div>
            <br>
    <div class="dropdown">
        <button class="dropbtn"><img src="cart6.png" style="width:50px;height:50px;"></button>
            <div class="dropdown-content">
                <a href="#"><img src="cart5.png" style="width:50px;height:50px;"><br>School Authority</a>
                <a href="change_school_pass.php?status=0">Change Password</a>
                <a href="logout.php">Logout</a>
            </div>
    </div>
            <span style="position:absolute;top:100px;left:300px;"><img src="setting.gif" style="width:50px;"><b>&nbsp;&nbsp;C O N T R O L&nbsp;&nbsp;&nbsp; P A N N E L</b></span>
            <div style="margin-top:150px;margin-left:40px;border:1px solid grey;border-top:5px solid grey;border-radius:0  0 10px 10px;padding:15px;width:250px;box-shadow: 5px 10px 50px grey;">
                    <?php
                $school_name = $_SESSION['s_name'];
                $school_board = $_SESSION['s_board'];
                $school_address = $_SESSION['s_address'];
                $school_owner = $_SESSION['s_owner'];
                $school_contact = $_SESSION['s_contact'];
                echo "<b>".$school_name."</b><span style='font-size:12px;'><br>Board : ".$school_board."<br>Owner : ".$school_owner."<br>Address : ".$school_address."<br>Contact : ".$school_contact."</span>";
                    ?>
            </div>
   <div style="position:absolute;left:300px;top:172px;">     
        <div class="tab" style="box-shadow:5px 10px 50px grey;">
            <button class="tablinks" onclick="show1(); openCity(event, 'new student')">New Student</button>
            <button class="tablinks" onclick="show2(); openCity(event, 'new teacher1')">New teacher</button>
            <button class="tablinks" onclick="show3(); openCity(event, 'student info')">Student Info</button>
            <button class="tablinks" onclick="show4(); openCity(event, 'teacher info')">Teacher Info</button>
        </div>
       

       <div id="new student" class="tabcontent">
           <div id="mydiv1" style="display:;margin:5px 0 0 350px;">
           <img src="loading.gif" style="width:30px;">   
        </div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <table cellspacing="10" style="margin-left:60px;">
                    <br><br>
                    <tr>
                        <td>Last Registration No.</td>
                        <td><input type="text" style="color:red;background-color:#ccc;border:1px solid grey;width:400;height:40;" value = "<?php echo $last_reg_student=='0'?'No Records':$last_reg_student; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" required></td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td>
                            <select name="class" style="width:100px;" required>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <span style="margin-left:50px;">Section</span>
                            <select name="sec" style="width:100px;" required>
                                <option>A</option>
                                <option>B</option>                                
                                <option>C</option>                                
                                <option>D</option>                                
                                <option>E</option>                                
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="addr" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" required></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" name="date" style="border:1px solid grey;width:400;height:40;" required></td>
                    </tr>
                    <tr>
                        <td>Gardian Name</td>
                        <td><input type="text" name="gname" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" required></td>
                    </tr>
                    <tr>
                        <td>Gardian Contact No.</td>
                        <td><input type="number" name="gcno" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><br><center><input type="submit" name="submit_student" value="Save" style="padding:10px 30px 10px 30px;"></center></td>
                    </tr>
                </table>
                <br><br>
            </form>
       </div>

       <div id="new teacher1" class="tabcontent">
            <div id="mydiv2" style="margin:5px 0 0 350px;">
           <img src="loading.gif" style="width:30px;">   
        </div>
           <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <table cellspacing="10" style="margin-left:50px;">
                    <br><br>
                    <tr>
                        <td>Last Registration No.</td>
                        <td><input type="text" style="color:red;background-color:#ccc;border:1px solid grey;width:400;height:40;" value = "<?php echo $last_reg_teacher1=='0'?'No Records':$last_reg_teacher1; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Faculty Name</td>
                        <td><input type="text" name="fname" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" reqired></td>
                    </tr>
                    <tr>
                        <td>Contact No.</td>
                        <td><input type="number" name="fcno" style="border:1px solid grey;width:400;height:40;" reqired></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="faddr" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" reqired></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" name="date" style="border:1px solid grey;width:400;height:40;" reqired></td>
                    </tr>
                    <tr>
                        <td>Date of Joining</td>
                        <td><input type="date" name="doj" style="border:1px solid grey;width:400;height:40;" reqired></td>
                    </tr>
                    <!--============================================-->
                    <tr>
                        <td rowspan="5" style="vertical-align:top;">Select Assigned Subject</td>
                        <td>
                             1. <select name="subject1" style="margin-left:15px;">
                                <option>select</option>
                                <option>English</option>
                                <option>Hindi</option>
                                <option>Maths</option>
                                <option>Social Science</option>
                                <option>History</option>
                                <option>E.V.S</option>
                                <option>Economics</option>
                                <option>Accounts</option>
                                <option>Java</option>
                                <option>BlueJ</option>
                                <option>DBMS</option>
                                <option>Physics</option>
                                <option>Chemistry</option>
                                <option>Biology</option>
                                <option>G.K</option>
                                <option>Moral Science</option>
                            </select>
                            <select name="subject1_class" style="margin-left:15px;">
                                <option>select</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select name="subject1_sec" style="margin-left:15px;">
                                <option>select</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select>
                     </td>
                    </tr>
                    <tr>
                        <td>
                            2. <select name="subject2" style="margin-left:15px;">
                                <option>select</option>
                                <option>English</option>
                                <option>Hindi</option>
                                <option>Maths</option>
                                <option>Social Science</option>
                                <option>History</option>
                                <option>E.V.S</option>
                                <option>Economics</option>
                                <option>Accounts</option>
                                <option>Java</option>
                                <option>BlueJ</option>
                                <option>DBMS</option>
                                <option>Physics</option>
                                <option>Chemistry</option>
                                <option>Biology</option>
                                <option>G.K</option>
                                <option>Moral Science</option>
                            </select>
                            <select name="subject2_class" style="margin-left:15px;">
                                <option>select</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select name="subject2_sec" style="margin-left:15px;">
                                <option>select</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3. <select name="subject3" style="margin-left:15px;">
                                <option>select</option>
                                <option>English</option>
                                <option>Hindi</option>
                                <option>Maths</option>
                                <option>Social Science</option>
                                <option>History</option>
                                <option>E.V.S</option>
                                <option>Economics</option>
                                <option>Accounts</option>
                                <option>Java</option>
                                <option>BlueJ</option>
                                <option>DBMS</option>
                                <option>Physics</option>
                                <option>Chemistry</option>
                                <option>Biology</option>
                                <option>G.K</option>
                                <option>Moral Science</option>
                            </select>
                            <select name="subject3_class" style="margin-left:15px;">
                                <option>select</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select name="subject3_sec" style="margin-left:15px;">
                                <option>select</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4. <select name="subject4" style="margin-left:15px;">
                                <option>select</option>
                                <option>English</option>
                                <option>Hindi</option>
                                <option>Maths</option>
                                <option>Social Science</option>
                                <option>History</option>
                                <option>E.V.S</option>
                                <option>Economics</option>
                                <option>Accounts</option>
                                <option>Java</option>
                                <option>BlueJ</option>
                                <option>DBMS</option>
                                <option>Physics</option>
                                <option>Chemistry</option>
                                <option>Biology</option>
                                <option>G.K</option>
                                <option>Moral Science</option>
                            </select>
                            <select name="subject4_class" style="margin-left:15px;">
                                <option>select</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select name="subject4_sec" style="margin-left:15px;">
                                <option>select</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5. <select name="subject5" style="margin-left:15px;">
                                <option>select</option>
                                <option>English</option>
                                <option>Hindi</option>
                                <option>Maths</option>
                                <option>Social Science</option>
                                <option>History</option>
                                <option>E.V.S</option>
                                <option>Economics</option>
                                <option>Accounts</option>
                                <option>Java</option>
                                <option>BlueJ</option>
                                <option>DBMS</option>
                                <option>Physics</option>
                                <option>Chemistry</option>
                                <option>Biology</option>
                                <option>G.K</option>
                                <option>Moral Science</option>
                            </select>
                            <select name="subject5_class" style="margin-left:15px;">
                                <option>select</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select name="subject5_sec" style="margin-left:15px;">
                                <option>select</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><br><center><input type="submit" name="submit_teacher1" value="Save" style="padding:10px 30px 10px 30px;"></center></td>
                    </tr>
                </table>
                <br><br>
            </form>
       </div>

       <div id="student info" class="tabcontent">
            <div id="mydiv3" style="margin:5px 0 10px 350px;">
           <img src="loading.gif" style="width:30px;">   
        </div>
           <?php
                $sql = "select stu_regno,name,class,sec,dob from student where regno='$school' order by class,sec;";
                if($result = mysqli_query($con,$sql))
                {
                    if(mysqli_num_rows($result))
                    {
                        echo "<table id='student-info' cellspacing='10'style='background-color:white;width:680px;margin-left:22px;'>
                            <tr>
                                <th>Registration No</th>
                                <th>Student Name</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>DOB</th>
                                <th>More</th>
                            </tr>
                            ";
                        while($row = mysqli_fetch_assoc($result))
                        {
                          echo "<tr>
                                <td>".$row['stu_regno']."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['class']."</td>
                                <td>".$row['sec']."</td>
                                <td>".$row['dob']."</td>
                                <td><a href='student_info_edit.php?update_msg_status=0&stu_regno=".$row['stu_regno']."'>Details</a></td>
                            </tr>";
                        }
                        echo "</table>";
                    }else echo "problem in display student info!! no row found";
                }else echo "problem in display student info!!";
           ?>
       </div>
              <div id="teacher info" class="tabcontent">
                   <div id="mydiv4" style="display:;margin:5px 0 10px 350px;">
           <img src="loading.gif" style="width:30px;">   
        </div>
           <?php
               $sql = "select tea_regno,name,contact,doj,dot from teacher1 where regno='$school' order by tea_regno;";
                if($result = mysqli_query($con,$sql))
                {
                    if(mysqli_num_rows($result))
                    {
                        echo "<table id='student-info' cellspacing='10' style='background-color:white;width:680px;margin-left:22px;'>
                            <tr>
                                <th>Registration No</th>
                                <th>Faculty Name</th>
                                <th>Contact No</th>
                                <th>Joining Date</th>
                                <th>Termination Date</th>
                                <th>More</th>
                            </tr>
                            ";
                        while($row = mysqli_fetch_assoc($result))
                        {
                          echo "<tr>
                                <td>".$row['tea_regno']."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['contact']."</td>
                                <td>".$row['doj']."</td>
                                <td>".$row['dot']."</td>
                                <td><a href='teacher_info_edit.php?update_msg_status=0&tea_regno=".$row['tea_regno']."'>Details</a></td>
                            </tr>";
                        }
                        echo "</table>";
                    }
                }
           ?>
       </div>
       
           <table style="position:absolute;left:760px;top:0px;border:1px solid grey;border-radius:0 0 10px 10px;border-top:5px solid grey;box-shadow:10px 5px 50px grey;width:250px;">
               <tr>
                   <td>
                       <span style="padding:2px;"><center><b>Notification Board</b></center></span>
                   </td>
               </tr>
               <tr>
                   <td style="padding:20px;font-size:15px;">
                       <span style= "color:grey;">
                       Student Registration : <?php echo $total_student;?><br>
                       Faculty Registration : <?php echo $total_teacher;?><br>
                       </span>
                    </td>
               </tr>
               <tr>
                   <td style="vertical-align: top; height:400px;padding:20px;font-size:15px;">                       
                        <?php 
                            if($success_student == 1)
                            {
                                echo "<br><span style='color:red;'>Student Added Successfully</span><br><span style='color:green;'>Name : $name<br>Reg. No. $new_student_reg_no<br>Password : $new_student_reg_no</span>";
                            $success_student = 0;
                            }else
                                if($success_teacher1 == 1)
                                {
                                    echo "<br><span style='color:red;'>Faculty Added Successfully</span><br><span style='color:green;'>Name : $fname<br>Reg. No. $new_teacher1_reg_no<br>Password : $new_teacher1_reg_no</span>";
                                    $success_teacher1 = 0;
                                }
                                
                        ?>
                   </td>
               </tr>
           </table>
    </div>
            

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    
}
    
function show1() {
    document.getElementById("mydiv1").style.display="block";
    setTimeout("hide1()", 300);  // 5 seconds
}

function hide1() {
    document.getElementById("mydiv1").style.display="none";
}

    
function show2() {
    document.getElementById("mydiv2").style.display="block";
    setTimeout("hide2()", 300);  // 5 seconds
}

function hide2() {
    document.getElementById("mydiv2").style.display="none";
}
    
function show3() {
    document.getElementById("mydiv3").style.display="block";
    setTimeout("hide3()", 300);  // 5 seconds
}

function hide3() {
    document.getElementById("mydiv3").style.display="none";
}

function show4() {
    document.getElementById("mydiv4").style.display="block";
    setTimeout("hide4()", 300);  // 5 seconds
}

function hide4() {
    document.getElementById("mydiv4").style.display="none";
}
    
    
</script>
            
            
    </body>
</html>

<?php
mysqli_close($con);
?>