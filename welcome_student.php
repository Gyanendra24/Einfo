<?php
session_start();

if(!isset($_SESSION['type']))
    header("location:index.php");



include 'connection.php';
$stu_regno = $_SESSION['stu_regno'];
$stu_name = $_SESSION['stu_name'];
$stu_class = $_SESSION['stu_class'];
$stu_sec = $_SESSION['stu_sec'];
$stu_address = $_SESSION['stu_address'];
$stu_dob = date("d/m/Y",strtotime($_SESSION['stu_dob']));
$stu_gname = $_SESSION['stu_gname'];
$stu_gcontact = $_SESSION['stu_gcontact'];
$stu_school_regno = $_SESSION['stu_school_regno'];


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
                <a href="change_stu_pass.php?status=0">Change Password</a>
                <a href="logout.php">Logout</a>
            </div>
    </div>
            <br><br><br><br><br><br>
            <center>
            <div style="background-color:#003152;width:900px;padding:20px;color:white">
                <?php
                    $sql = "select * from school where regno='$stu_school_regno';";
                    $row = mysqli_fetch_assoc(mysqli_query($con,$sql));
                    echo "<span style='font-size:20px;letter-spacing:2px;'><b>".$row['school_name']."</b></span><br>";
                    echo "<span style='letter-spacing:2px;'>".$row['board']."</span><br>";
                    echo "<span style=''>".$row['address']."</span>";
                    echo " <b>Contact No. </b> <span style=''> ".$row['contact']."</span>";
                ?>
            </div>
                <div style="width:900px;padding:20px;border:1px solid #003152;border-bottom:20px solid #003152;">
                  <table style="font-size:13px;" cellspacing="5">
                      <tr>
                          <td style="font-weight:bold;">Registration No.</td>
                          <td><span style="text-transform:uppercase;letter-spacing:2px;"><?php echo $stu_regno;?></span></td>
                          <td><span style="margin-left:100px;"/></td>
                          <td style="font-weight:bold;">DOB</td>
                          <td><span style="text-transform:uppercase;letter-spacing:2px;"><?php echo $stu_dob;?></td>
                    </tr>
                      <tr>
                          <td style="font-weight:bold;">Name</td>
                          <td><span style="text-transform:uppercase;letter-spacing:2px;"><?php echo $stu_name;?></span></td>
                          <td></td>
                          <td style="font-weight:bold;">Gardian</td>
                          <td><span style="text-transform:uppercase;letter-spacing:2px;"><?php echo $stu_gname;?></span></td>
                      </tr>
                      <tr>
                          <td style="font-weight:bold;">Class</td>
                          <td><?php echo $stu_class;?></td>
                          <td></td>
                          <td style="font-weight:bold;">Phone No</td>
                          <td><?php echo $stu_gcontact;?></td>
                      </tr>
                      <tr>
                          <td style="font-weight:bold;">Sec</td>
                          <td><?php echo $stu_sec;?></td>
                          <td></td>
                          <td style="font-weight:bold;">Address</td>
                          <td><span style="text-transform:uppercase;letter-spacing:1px;"><?php echo $stu_address;?></span></td>
                      </tr>
                    </table>
                </div>
                <div>
                    <table id="marks" style="text-align:center;">
                        
                    <?php
                        $sql = "select a.*,t.name,t.contact from academic a,teacher1 t where a.tea_regno=t.tea_regno and stu_regno = '$stu_regno';";
                        if($result=mysqli_query($con,$sql))
                        {
                            if(mysqli_num_rows($result))
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo "<tr>
                                            <td><center>
                                                <table id='stu_data' style='width:800px;font-size:13px;border:1px solid white;'>
                                                    <tr>
                                                        <td><b>Subject</b></td>
                                                        <td>".$row['subject']."</td>
                                                        <td><b>Total Marks</b></td>
                                                        <td>";if($row['mm']==0)echo "<span style='color:red;'>NE</span>"; else echo $row['mm']; echo "</td>
                                                        <td><b>Obtain Marks</b></td>
                                                        <td>".$row['ob']."</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Purpose</b></td>
                                                        <td>".$row['purpose']."</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><b>Teaching By</b></td>
                                                        <td>".$row['name']."</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Discription</b></td>
                                                        <td>".$row['disc']."</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td><b>Contact No</b></td>
                                                        <td>".$row['contact']."</td>
                                                    </tr>
                                                </table>
                                           </center> </td>
                                        </tr>";
                                }
                            }
                        }
                    
                    ?>
                    </table>
                </div>
            </center>
            <br><br><br>
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