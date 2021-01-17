<?php
session_start();

if(!isset($_SESSION['type']))
    header("location:index.php");


include 'connection.php';
$stu_regno = $_SESSION['stu_regno'];
$stu_name = $_SESSION['stu_name'];
?>

<html>
    <head>
        
        <style>
body {font-family: Arial;}
            #stu_data{
                border-collapse:collapse;
                border:0px solid black;
            }
            #stu_data th,td{
                border:0px solid black;
            }
#marks {
    border-collapse: collapse;
    width: 900px;
    font-size:13px;
}

#marks td{
    border: 1px solid #003152;
    padding: 8px;
}
#marks th {
        padding:2px;
    border:1px solid #003152;
        }            

#marks th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: rgb(24,24,24);
    color: white;
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
                <a href="#"><img src="cart5.png" style="width:50px;height:50px;"><br><?php echo $stu_name;?> </a>
                <a href="logout.php">Logout</a>
            </div>
    </div>
            <br><br><br><br><br><br>
             <center>
            <?php
                $status=$_GET['status'];
                if($status == 1)
                    echo "<span style='color:red;'>Old Password is Wrong</span>";
            
            ?>
           
                <div style="border:1px solid grey;width:500px;padding:30px;box-shadow:0 0 50px black;">
            <form method="POST" action="change_stu_pass_php.php">
                <table>
                    <tr>
                        <td>Old Password</td>
                        <td><input type='text' name='oldp' placeholder="old password" style="border:1px solid grey;border-radius:5px;width:250px;" reauired></td>
                    </tr>
                    <tr>
                        <td><br>New Password</td>
                        <td><br><input type='text' name='newp' placeholder="new password" style="border:1px solid grey;border-radius:5px;width:250px;" required></td>
                    </tr>
                    <tr>
                        <td colspan=2 style="text-align:center"><br><input type='submit' value='Update Password' style="padding:5px 10px 5px 10px;"></td>
                    </tr>
                </table>
            </form>
                </div>
            </center>
            <br><br><br><br>
            <div style="float:left;width:100%;padding:100px;color:white;background-color:#ccc;">
                    <span style="color:#003152"><b>To Contact Us</b><br>
                        Email : einfoservice@einfo.com<br>
                    <i>Feel free to Email your queries</i></span>
                </div>
                <div style="background-color:#003152;padding:10;text-align:center;color:white">
                    
                    &copy; Copyright 2018-<?php echo date('Y');?>
                    
                </div>
    </body>
</html>