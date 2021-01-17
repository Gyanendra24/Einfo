<?php
session_start();

if(!isset($_SESSION['type']))
    header("location:index.php");


include 'connection.php';
$tea_regno = $_GET['tea_regno'];
$update_msg_status = $_GET['update_msg_status'];

?>

<html>
    <head>
        
        <style>
body {font-family: Arial;}
            a{
                text-decoration:none;
            }
/* Style the tab */
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
            <span style="position:absolute;margin:80px 0 0 360px;"><span style="color:white;padding:10px 16px 10px 16px;background-color:black;">F</span> A C U L T Y </span>
            <br><br>
            <form method="post" action="teacher_info_update_php.php?tea_regno=<?php echo $tea_regno;?>">
                <?php
                if(isset($_GET['tea_regno']))
                {
                    $sql = "select name,contact,address,dob,doj,dot from teacher1 where tea_regno='$tea_regno';";
                    if($result = mysqli_query($con,$sql))
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                        
                ?>
                <?php
                if($update_msg_status==1)
                        echo "<span style='color:red;position:absolute;margin:80px 0 0 360px;'>Updated Successfully</span>";
                ?>
                    <table cellspacing="10" style="box-shadow:0px 0px 50px grey;margin:70px 0 0 350px;border-style:dotted;border-radius:5px;padding:1px;">
                    <br><br>
                    <tr>
                        <td>Registration No.</td>
                        <td><input type="text" style="color:red;background-color:#ccc;border:1px solid grey;width:400;height:40;" value="<?php echo $tea_regno;?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Faculty Name</td>
                        <td><input type="text" id="fname" name="fname" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" value="<?php echo $row['name'];?>" reqired readonly></td>
                    </tr>
                    <tr>
                        <td>Contact No.</td>
                        <td><input type="number" id="fcno" name="fcno" style="border:1px solid grey;width:400;height:40;" value="<?php echo $row['contact'];?>" reqired readonly></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" id="faddr" name="faddr" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" value="<?php echo $row['address'];?>" reqired readonly></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" id="date" name="date" style="border:1px solid grey;width:400;height:40;" value="<?php echo $row['dob'];?>" reqired readonly></td>
                    </tr>
                    <tr>
                        <td>Date of Joining</td>
                        <td><input type="date" id="doj" name="doj" style="border:1px solid grey;width:400;height:40;" value="<?php echo $row['doj'];?>" reqired readonly></td>
                    </tr>
                    <tr>
                        <td>Date of Termination</td>
                        <td><input type="date" id="dot" name="dot" style="border:1px solid grey;width:400;height:40;" value="<?php echo $row['dot'];?>" reqired readonly></td>
                    </tr>
                    
                    <!--============================================-->
                    <?php
                        }
                    }
                       
                    ?>
                    <tr>
                        <td rowspan="5" style="vertical-align:top;">Select Assigned Subject</td>
                        <td>
                             1. <select id="subject1" name="subject1" style="margin-left:15px;">
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
                            <select id="subject1_class" name="subject1_class" style="margin-left:15px;">
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
                            <select id ="subject1_sec" name="subject1_sec" name="subject1_sec" style="margin-left:15px;">
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
                            2. <select id="subject2" name="subject2" style="margin-left:15px;">
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
                            <select id="subject2_class" name="subject2_class" style="margin-left:15px;">
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
                            <select id="subject2_sec" name="subject2_sec" style="margin-left:15px;">
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
                            3. <select id="subject3" name="subject3" style="margin-left:15px;">
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
                            <select id="subject3_class" name="subject3_class" style="margin-left:15px;">
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
                            <select id="subject3_sec" name="subject3_sec" style="margin-left:15px;">
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
                            4. <select id="subject4" name="subject4" style="margin-left:15px;">
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
                            <select id="subject4_class" name="subject4_class" style="margin-left:15px;">
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
                            <select id="subject4_sec" name="subject4_sec" style="margin-left:15px;">
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
                            5. <select id="subject5" name="subject5" style="margin-left:15px;">
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
                            <select id="subject5_class" name="subject5_class" style="margin-left:15px;">
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
                            <select id="subject5_sec" name="subject5_sec" style="margin-left:15px;">
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
                </table>
                                        
                <?php
                    
                     $sql = "select * from teacher_subject where tea_regno='$tea_regno';";
                        if($result = mysqli_query($con,$sql))
                        {
                            if(mysqli_num_rows($result))
                            {
                                $i=1;
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    ?>
                                      <script>
                                          
                                          var sub = document.getElementById("subject"+'<?php echo $i;?>');        
                                          var sub_class = document.getElementById("subject"+'<?php echo $i;?>'+"_class");        
                                          var sub_sec = document.getElementById("subject"+'<?php echo $i;?>'+"_sec");
                                          setV(sub,'<?php echo $row['subject']; ?>');
                                          setV(sub_class,'<?php echo $row['class']; ?>');
                                          setV(sub_sec,'<?php echo $row['sec']; ?>');
                                        
                                          function setV(obj,x){
                                                var i=0;
                                                while(obj.options[i++].text!=x);

                                                obj.options[--i].selected = true;
                                            }
                                            

                                    </script>  
                                
                <?php
                                    $i=$i+1;
                                }
                            }
                        }
                   
                }
               ?>
                
                <span style="margin-left:560px"><input type="button" value="Edit" onclick="getEdit()" style="padding:10px 35px 10px 35px;">
                    <input type="submit" name="submit_teacher" value="Save" style="padding:10px 30px 10px 30px;">
                    <input type="button" onclick="refreshPage()" value="Refresh" style="padding:10px 30px 10px 30px;">
                        <a href="welcome_school.php"><span style="padding:10px 30px 10px 30px;background-color:#ccc;color:black;text-decoration:none;">Back</span></a></span>
                <br><br>
            </form> 
            <script>
                function refreshPage() {
                    location.reload();
                }
            </script>
            
            <script>
            
                function getEdit()
                {
                    document.getElementById('fname').removeAttribute('readonly');
                    document.getElementById('fcno').removeAttribute('readonly');
                    document.getElementById('faddr').removeAttribute('readonly');
                    document.getElementById('date').removeAttribute('readonly');
                    document.getElementById('doj').removeAttribute('readonly');
                    document.getElementById('dot').removeAttribute('readonly');
                }
            </script>
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
<?php mysqli_close($con); ?>