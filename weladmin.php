<?php

session_start();

if(!isset($_SESSION['admin']))
    header("Location:admin.php");

include 'connection.php';
    
?>



<html>
    <head>
        
        <style>
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
    position:absolute;
    top:100px;
    left:410px;
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
   
    border-top: none;
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
        <div id="header">
            <img src="logo-einfo-2x.png" style="width:200px;height:120px;margin:15px 0 0 70px;position:fixed;z-index:1;">
        </div>
            <br>
    <div class="dropdown">
        <button class="dropbtn"><img src="cart6.png" style="width:50px;height:50px;"></button>
            <div class="dropdown-content">
                <a href="#"><img src="cart5.png" style="width:50px;height:50px;"> Admin</a>
                <a href="admin.php?id=0">Logout</a>
            </div>
    </div>
            <!--============TABS=================================================================-->
            <div class="tab" style="width:500px;">
            <button class="tablinks" onclick="openCity(event, 'London')">New School</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Contract Notification</button>
            <button class="tablinks" onclick="openCity(event, 'email')">Email</button>
            
            </div>

            <div style="position:absolute;top:160px;left:790px;">
                <?php
                    $send = $_GET['send'];
                        if($send==1)
                        {
                            echo "<span style='color:blue'><i>Message Sent . .</i></span>";
                        }
                else
                    echo "<span style='color:blue'><i>Message Sent</i></span>";
                    
                    ?>

            </div>
            <div id="email" class="tabcontent" style="position:absolute;top:200px;left:360px;">
                <div style="border:1px solid grey;padding:30px;box-shadow:0 0 100px black;height:400px;">
                                    <center>
                    <form id="contract" method="POST" action="mail_test.php">
                        <table cellspacing="10" style="font-size:12px;">
                            <tr>
                                <td style="color:#003152;">User Email</td>
                                <td><input type="email" name="email" style="border:1px solid grey;height:35px;border-radius:5px;width:418px;" required></td>
                            </tr>
                            <tr>
                                <td style="color:#003152;">Subject</td>
                                <td><input type="text" name="subject" value="Notification from eINFO" style="border:1px solid grey;height:35px;border-radius:5px;width:418px" required></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:top;color:#003152;">Message</td>
                                <td><textarea form="contract" name="msg" rows="10" cols="66" style="border:1px solid grey;" required></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2"><center><input type="submit" value="Send" style="padding:6px 10px 6px 10px;"></center></td>
                            </tr>
                        </table>
                    </form>
                    </center>
                </div>
            </div>
            
            <div id="London" class="tabcontent" style="">
            <div style="margin:140px 0 0 350px;">
                <span ><i>Registration for New School</i></span>
                <?php
                    if($_GET['flag']=='1')
                        echo "<span style='color:green;margin-left:10px;'>Successfully Registered</span>";
                    else
                        if($_GET['flag']=='0')
                            echo "<span style='color:red;margin-left:10px;'>Registration No. already registered </span>";
                ?>
            </div>
            <div style="margin:10px 0 0 300px;padding:50px 50px 10px 50px;box-shadow:0 0 50px;border:1px solid grey;width:700px;border-radius:70px;">
                
            <form method="POST" action="reg_school_php.php">
                <table cellspacing="10">
                    <tr>
                        <td>Registration No.</td>
                        <td><input type="text" name="regno" style="border:1px solid grey;border-radius:10px;height:40px;width:400px;text-transform:uppercase" required></td>
                    </tr>
                    <tr>
                        <td>School Name</td>
                        <td><input type="text" name="schoolname" style="text-transform:capitalize;border:1px solid grey;border-radius:10px;height:40px;width:400px;" required></td>
                    </tr>
                    <tr>
                        <td>Board</td>
                        <td>
                            <select name="board" style="border:1px solid grey;border-radius:10px;height:40px;width:400px;">
                                <option>CBSE</option>
                                <option>ICSE</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="addr" style="text-transform:capitalize;border:1px solid grey;border-radius:10px;height:40px;width:400px;" required></td>
                    </tr>
                    <tr>
                        <td>Owner Name</td>
                        <td><input type="text" name="oname" style="text-transform:capitalize;border:1px solid grey;border-radius:10px;height:40px;width:400px;" required></td>
                    </tr>
                    <tr>
                        <td>Contact No.</td>
                        <td><input type="number" name="cno" style="border:1px solid grey;border-radius:10px;height:40px;width:400px;" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="pass" style="border:1px solid grey;border-radius:10px;height:40px;width:400px;" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><br><center><input type="submit" name="submit" value="Register" style="padding:10px 20px 10px 20px;border-radius:5px;"></center></td>
                    </tr>
                </table>
            </form>
            
            </div>

        </div>

            <div id="Paris" class="tabcontent" style="width:300px;position:absolute;top:200;left:400px;">
                <div>
                    <span style="color:red;"><b>Requests</b></span>    
                <table style="width:500px;box-shadow:0 0 50px red;" cellspacing="10">
                    <?php
                        $sql="select * from contract;";
                        if($result=mysqli_query($con,$sql))
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo "
                                <tr>
                                    <td>
                                        <table cellspacing='10' style='font-size:13px;border:1px solid grey;width:500px;'>
                                            <tr>
                                                <td style='vertical-align:top;'><b>Name</b></td>
                                                <td style='vertical-align:top'>".$row['name']."</td>
                                                <td style='vertical-align:top'><b>Email</b></td>
                                                <td style='vertical-align:top'>".$row['email']."</td>
                                            </tr>
                                            <tr>
                                                <td style='vertical-align:top'><b>Message<b></td>
                                                <td colspan=3 style='vertical-align:top'>".$row['msg']."</td>
                                            </tr>
                                        </table>    
                                    </td>
                                </tr>
                                
                                ";
                            }
                        }
                    
                    ?>
                </table>
                </div>
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
</script>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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