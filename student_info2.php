<?php
session_start();
include 'connection.php';
$tea_regno = $_SESSION['t_regno'];
$fetch_4digit_school = $tea_regno[3].$tea_regno[4].$tea_regno[5].$tea_regno[6];

$subject = $_GET['subject'];
$class = $_GET['class'];
$sec = $_GET['sec'];

$stu_regno = $_GET['stu_regno'];
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

#student-info th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #003366;
    color: white;
}
            
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
                <a href="index.php?school_session=0" style="background-color:#ccc;font-size:13px;"><b>Logout<b></a>
            </div>
    </div>
                <span style="position:absolute;top:100px;left:300px;"><img src="setting.gif" style="width:50px;"><b>&nbsp;&nbsp;M A N A G E&nbsp;&nbsp;&nbsp; A C A D E M I C &nbsp;&nbsp;&nbsp; R E C O R D S</b></span>
            <br><br><br><br><br><br><br>
                <!---========================Alloated course to teacher=========================================================-->
            <span style="margin-left:100px;padding:5px;border-left:1px solid grey;border-top:1px solid grey;border-right:1px solid grey;font-size:12px;"><?php echo $subject;?></span>
                <span style="padding:5px;border-left:1px solid grey;border-top:1px solid grey;border-right:1px solid grey;font-size:12px;">Class <?php echo $class;?></span>
                <span style="padding:5px;border-left:1px solid grey;border-top:1px solid grey;border-right:1px solid grey;font-size:12px;">Sec <?php echo $sec;?></span>
                
            <hr style="width:800px;margin:10px 0 0 100px;border:1px solid #ccc;"/>
                <div id="student info" class="tabcontent">
            <div id="mydiv3" style="position:absolute;left:500;top:240px;">
           <img src="loading.gif" style="width:30px;">   
        </div>
                    <br>
                    <?php
                if(isset($_GET['stu_regno']))
                {
                    $sql = "select name,class,sec,address,dob,gname,gcontact from student where stu_regno='$stu_regno';";
                    if($result = mysqli_query($con,$sql))
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                ?>
           <table cellspacing="10" style="box-shadow:0px 0px 50px grey;margin:0px 0 0 250px;border-style:inset;border-radius:5px;padding:1px;">
                    <br><br>
                    <tr>
                        <td>Registration No.</td>
                        <td><input type="text" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" value="<?php echo $stu_regno;?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" id="name" name="name" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" value="<?php echo $row['name'];?>" required readonly></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" id="addr" name="addr" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" value="<?php echo $row['address'];?>" required readonly></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" id="date" name="date" style="border:1px solid grey;width:400;height:40;" value="<?php echo $row['dob'];?>" required readonly></td>
                    </tr>
                    <tr>
                        <td>Gardian Name</td>
                        <td><input type="text" id="gname" name="gname" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" value="<?php echo $row['gname'];?>" required readonly></td>
                    </tr>
                    <tr>
                        <td>Gardian Contact No.</td>
                        <td><input type="number" id="gcno" name="gcno" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" value="<?php echo $row['gcontact'];?>"required readonly></td>
                    </tr>
                    <?php
                        }
                    }
                }
                    ?>
                    </table>
                
       </div>

  <!--=====================================================================================================-->
<script type="text/javascript">

  (function(){
    var myDiv = document.getElementById("mydiv3"),

      show = function(){
        mydiv3.style.display = "block";
        setTimeout(hide, 1000); // 5 seconds
      },

      hide = function(){
        mydiv3.style.display = "none";
      };

    show();
  })();

</script>
                
        </body>
    </html>