<?php
session_start();

if(!isset($_SESSION['type']))
    header("location:index.php");


include 'connection.php';
$stu_regno = $_GET['stu_regno'];
$update_msg_status= $_GET['update_msg_status'];

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
            <span style="position:absolute;margin:80px 0 0 360px;"><span style="color:white;padding:10px 16px 10px 16px;background-color:black;">S</span> T U D E N T</span>
            <br><br>
            <form method="post" action="student_info_update_php.php?stu_regno=<?php echo $stu_regno;?>">
                <?php
                if(isset($_GET['stu_regno']))
                {
                    $sql = "select name,class,sec,address,dob,gname,gcontact from student where stu_regno='$stu_regno';";
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
                        <td><input type="text" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" value="<?php echo $stu_regno;?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" id="name" name="name" style="text-transform: capitalize;border:1px solid grey;width:400;height:40;" value="<?php echo $row['name'];?>" required readonly></td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td>
                            <select id="stu_cls" name="class" style="width:100px;" required>
                               <?php
                                switch($row['class'])
                                {
                                    case '1': echo "<option selected>1</option>
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
                                            <option>12</option>"; break;
                                
                                    case '2':echo" <option>1</option>
                                            <option selected>2</option>
                                            <option>3</option>
                                            <option>4</option>;
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>";break;
                                    
                                    case '3': echo "<option>1</option>
                                            <option>2</option>
                                            <option selected>3</option>
                                            <option>4</option>;
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option> ";break;
                                    
                                    case '4': echo "<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option selected>4</o;ption>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option> ";break;
                                        
                                    case '5': echo "<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>;
                                            <option selected>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option> ";break;
                                        
                                    case '6': echo "<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>;
                                            <option>5</option>
                                            <option selected>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>"; break;
                                        
                                    case '7': echo "<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>;
                                            <option>5</option>
                                            <option>6</option>
                                            <option selected>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>"; break;
                                        
                                    case '8': echo "<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option selected>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>"; break;
                                    case '9': echo "<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option selected>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>"; break;
                                    case '10': echo "<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option selected>10</option>
                                            <option>11</option>
                                            <option>12</option>"; break;
                                    case '11': echo "<option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option selected>11</option>
                                            <option>12</option>"; break;
                                    case '12': echo "<option>1</option>
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
                                            <option selected>12</option>"; break;
                                }
                                    
                                ?>
                            </select>
                    
                            <span style="margin-left:50px;">Section</span>
                            <select id="stu_sec" name="sec" style="width:100px;" required>
                            <?php
                                switch($row['sec'])
                                {
                                    case 'A':echo "<option selected>A</option>
                                <option>B</option>                                
                                <option>C</option>                                
                                <option>D</option>                                
                                <option>E</option>                                
                                <option>F</option>"; break;
                                    case 'B':echo "<option>A</option>
                                <option selected>B</option>                                
                                <option>C</option>                                
                                <option>D</option>                                
                                <option>E</option>                                
                                <option>F</option>"; break;
                                    case 'C':echo "<option>A</option>
                                <option>B</option>                                
                                <option selected>C</option>                                
                                <option>D</option>                                
                                <option>E</option>                                
                                <option>F</option>"; break;
                                    case 'D':echo "<option>A</option>
                                <option>B</option>                                
                                <option>C</option>                                
                                <option selected>D</option>                                
                                <option>E</option>                                
                                <option>F</option>"; break;
                                    case 'E':echo "<option>A</option>
                                <option>B</option>                                
                                <option>C</option>                                
                                <option>D</option>                                
                                <option selected>E</option>                                
                                <option>F</option>"; break;
                                    case 'F':echo "<option>A</option>
                                <option>B</option>                                
                                <option>C</option>                                
                                <option>D</option>                                
                                <option>E</option>                                
                                <option selected>F</option>"; break;
                                }
                                
                            ?>
                                
                            </select>
                        </td>
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
                    <span style="margin-left:650px"><input type="button" name="submit_student" value="Edit" onclick="getEdit()" style="padding:10px 35px 10px 35px;">
                    <input type="submit" name="submit_student" value="Save" style="padding:10px 30px 10px 30px;">
                        <a href="welcome_school.php"><span style="padding:10px 30px 10px 30px;background-color:#ccc;color:black;text-decoration:none;">Back</span></a></span>
                <br><br>
            </form>
            <script>
            
                function getEdit()
                {
                    document.getElementById('name').removeAttribute('readonly');
                    document.getElementById('stu_cls').removeAttribute('disabled');
                    document.getElementById('stu_sec').removeAttribute('disabled');
                    document.getElementById('addr').removeAttribute('readonly');
                    document.getElementById('date').removeAttribute('readonly');
                    document.getElementById('gname').removeAttribute('readonly');
                    document.getElementById('gcno').removeAttribute('readonly');
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