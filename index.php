<?php

session_start();

include "connection.php";
$c=0;
if(isset($_SESSION['type'])&& $_SESSION['type']=="student")
{
    header("location:welcome_student.php");
}
else
    if(isset($_SESSION['type'])&& $_SESSION['type']=="school")
{
    header("location:welcome_school.php");
}
else
    if(isset($_SESSION['type'])&& $_SESSION['type']=="teacher")
{
    header("location:welcome_teacher.php");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $regno = ucwords($_POST['regno']);
    $pass = $_POST['pass'];
    $type = strtolower($_POST['type']);
    
    if($type == "school")
    {
        $sql = "select * from school where regno='$regno' and password='$pass';";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result))
        {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['type']="school";
            $_SESSION['school_regno']=$regno;
            $_SESSION['s_name']=$row['school_name'];
            $_SESSION['s_board']=$row['board'];
            $_SESSION['s_address']=$row['address'];
            $_SESSION['s_owner']=$row['owner'];
            $_SESSION['s_contact']=$row['contact'];
            header("Location:welcome_school.php");
        }
        else
            echo "<script type='text/javascript'>alert('Invalid Registration No. OR Password!!')</script>";
        
    }
    
    if($type == "teacher")
    {
        $sql = "select * from teacher1 where tea_regno='$regno' and password='$pass';";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result))
        {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['type']="teacher";
            $_SESSION['t_regno']=$regno;
            $_SESSION['t_name']=$row['name'];
            $_SESSION['t_contact']=$row['contact'];
            $_SESSION['t_dob']=$row['dob'];
            $_SESSION['t_address']=$row['address'];
            $_SESSION['t_doj']=$row['doj'];
            $_SESSION['t_dot']=$row['dot'];
            $_SESSION['t_school_regno']=$row['regno'];
            header("Location:welcome_teacher.php");
        }
        else
            echo "<script type='text/javascript'>alert('Invalid Registration No. OR Password!!')</script>";
        
    }
    
    if($type == "student")
    {
        $sql = "select * from student where stu_regno='$regno' and password='$pass';";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result))
        {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['type']="student";
            $_SESSION['stu_regno']=$regno;
            $_SESSION['stu_name']=$row['name'];
            $_SESSION['stu_class']=$row['class'];
            $_SESSION['stu_sec']=$row['sec'];
            $_SESSION['stu_address']=$row['address'];
            $_SESSION['stu_dob']=$row['dob'];
            $_SESSION['stu_gname']=$row['gname'];
            $_SESSION['stu_gcontact']=$row['gcontact'];
            $_SESSION['stu_school_regno']=$row['regno'];
            header("Location:welcome_student.php");
        }
        else
            echo "<script type='text/javascript'>alert('Invalid Registration No. OR Password!!')</script>";
        
    }
    

}

?>


<html>
    <head>
        
        <style>
            
            .mytext {display:none;}
            
            #header{
                background-color:#003366;
                position:absolute;
                top:0;
                left:0;
                padding:0px;
                width:100%;
                height:70px;
            }    
            .menu-list{
                display:inline;
                padding:2px 12px 3px 5px;
                margin:0px;
                font-family: Arial, Helvetica, sans-serif;
                font-size:14px;
                color:white;
                background-color:#101010;
                float:left;
            }
            
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
        <div id="header">
            <img src="logo-einfo-2x.png" style="width:200px;height:120px;margin:15px 0 0 70px;position:fixed;z-index:1;">
            <div>
                <ul style="list-style-type:none;position:absolute;top:43px;right:0;">
                    <li style="display:inline;margin:0;float:left;"><img src="corner.jpg" height=37%;></li>
                    <li class="menu-list" style="padding:2px 12px 3px 70px;"><a href='index.php' style="color:white;text-decoration:none;font-size:13px;">Home</a></li>
                    <li style="color:white;float:left;background-color:#101010;padding:2px 8px 2px;">|</li>
                    <li class="menu-list"><a href='#aboutus' style="color:white;text-decoration:none;font-size:13px;">AboutUS</a></li>
                    <li style="color:white;float:left;background-color:#101010;padding:2px 8px 2px;">|</li>
                    <li class="menu-list"><a href="#cont"  style="color:white;text-decoration:none;font-size:13px;">Contract</a></li>
                    <li style="color:white;float:left;background-color:#101010;padding:2px 8px 2px;">|</li>
                    <li class="menu-list" style="padding:2px 300px 3px 5px;"><a href="#contact"  style="color:white;text-decoration:none;font-size:13px;">Contact</a></li>
                </ul>
                <div style="position:absolute;top:71px;z-index:-1;width:1366px;">
                    <img src="student2.jpg" style="float:left;width:366px;height:556px;">
                    <img src="student.jpg" style="width:1000px;float:right;">
                </div>
            </div>
        </div>
            <!--login-->
            <br><br><br><br><br><br><br>
			<div class="wrap-login100" style="padding:50px 35px 30px 35px;margin-left:80px;opacity:.9;filter:alpha(opacity=100);background-color:black;">
				<form class="login100-form validate-form" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<span class="login100-form-title p-b-26" style="color:white;">
						Welcome
					</span>
                   
						<select name="type" style="border:1px solid grey;border-radius:10px;height:35px;width:320px;">
                            <option>STUDENT</option>
                            <option>SCHOOL</option>
                            <option>TEACHER</option>
                        </select>
						<br><br>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="regno" placeholder="Registration No."style="text-transform:uppercase;color:white;">
						<span class="focus-input100" style="color:white;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass" style="color:white;">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" placeholder="Password" style="color:white;">
						<span class="focus-input100" style="color:white;"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" >
								Login
							</button>
						</div>
                        
					</div>

				</form>
                <br>
			</div>	

	<div id="dropDownSelect1"></div>
            
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
            
            <!--my slides test-->
        
            <div style="position:absolute;right:0;top:450px;">
                <div class="mytext" >
                    <span style="color:white;padding:30px 170px 30px 30px;background-color:black;opacity:0.5;font-family:'Bahnschrift';font-size:40px;">Welcome to eINFO</span>
                </div>
                
                <div class="mytext">
                    <span style="color:white;padding:30px 170px 30px 30px;background-color:black;opacity:0.5;font-family:'Bahnschrift';font-size:40px;">Where you can Keep your Record Safe</span>
                    </div>
                <div class="mytext">
                    <span style="color:white;padding:30px 170px 30px 30px;background-color:black;opacity:0.5;font-family:'Bahnschrift';font-size:40px;">Message Service</span>
                </div>
                <div class="mytext">
                    <span style="color:white;padding:30px 170px 30px 30px;background-color:black;opacity:0.5;font-family:'Bahnschrift';font-size:40px;">Contract Based Service</span>
                </div>
                
            </div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mytext");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>
            <!--==============below slider===================================================================================-->
            
            <div style="background-color:#003366;padding:40px;margin-top:22px;"></div>
            <div>
                <center><div style="width:1000px;border-radius:0 0 100px 100px;padding:50px;background-color:#ccc" ><a name="aboutus"/></div></center>
                <br>
                <div style="width:500px;text-align: justify;margin-left:100px;float:left;font-size:13px;color:grey;"><br><br>
                    <span style="font-size:25px;font-weight:bold;color:#003152">About eINFO</span><br>
eINFO is a guide to Ontario universities for Ontario high school students and guidance counsellors. It provides information about university programs, admission requirements and more. eINFO should be used as a starting point for researching university options.

The information for eINFO 2019 was compiled by university liaison representatives in August 2018 and updates will be added throughout the year, as universities amend their program information. See Addenda for updates.

For the most up-to-date information, consult the universities directly or visit their websites.

eINFO is produced by the General Committee on Student Recruitment (GCSR) of the Ontario University Registrars' Association (OURA) in collaboration with the Council of Ontario Universities (COU) and the Ontario Universities' Application Centre (OUAC). eINFO is guided by an editorial board of appointed members who represent the various parties served by the website, and is funded by a portion of the Ontario university application service fee.

An eINFO postcard [PDF] is distributed to Ontario high schools in early September. The postcard directs students, parents and counsellors to important resources and updates available on the eINFO site, and it outlines some of the essential questions and deadlines students should consider as they browse eINFO in preparation for applying to university.
                </div>
                
                <div style="margin-left:100px;width:500px;height:500px;float:left;background-color:#F0F0F0;padding:70px 60px 60px 60px;">
                    <span style="color:#003152;"><b>About eINFO</b></span>
                    <hr>
                    Accessibility
                    <hr>
                    About This Site
                    <hr>
                    Announcements
                    <hr>
                    Evolution of eInfo
                    <hr>
                    Is eINFO for Me?
                    <hr>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <center><div style="width:1000px;border-radius:100px 100px 0px 0px;padding:50px;background-color:#ccc" ><a name="cont"/></div></center>
                <div style="background-color:#528B8B;padding:50px 20px 20px 20px;width:700px;float:left;">
                    <center>
                    <form id="contract" method="POST" action="contract.php">
                        <table cellspacing="10">
                            <tr>
                                <td style="color:white;">Name</td>
                                <td><input type="text" name="cname" style="border-radius:5px;width:418px;" required></td>
                            </tr>
                            <tr>
                                <td style="color:white;">Email</td>
                                <td><input type="email" name="cemail" style="border-radius:5px;width:418px" required></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top;color:white;">Message</td>
                                <td><textarea form="contract" name="msg" rows="10" cols="50" required></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" value="submit" style="padding:6px 10px 6px 10px;"></center></td>
                            </tr>
                        </table>
                    </form>
                    </center>
                </div>
                
                <div style="background-color:#F0F0F0;padding:60px;height:457px;width:649px;float:right;">
                    <a name="contact"/>
                    <span style="color:#003152;font-size:20px;"><b>Contract</b></span><br>
                    eINFO also offers contract based service to customers.
                    Where they explain their work and eINFO design a prototype accordinglly, after all important certain changes the contract is signed for certain duration of months and eINFO team make it done. 
                </div>
                
                <div style="float:left;width:100%;padding:100px;color:white;background-color:#ccc;">
                    <span style="color:#003152"><b>To Contact Us</b><br>
                        Email : einfoservice@einfo.com<br>
                    <i>Feel free to Email your queries</i></span>
                </div>
                <div style="background-color:#003152;padding:10;text-align:center;color:white">
                    
                    &copy; Copyright 2018-<?php echo date('Y');?>
                    
                </div>
            </div>
        </body>
</html>