<?php 

session_start();
if (isset($_POST['submitted']))
{
$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);


$name = $_POST['name'];
$enroll = $_POST['enrollment'];
$course = $_POST['course'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
   
         $subject = "Registration Confirmaton";
         $message = "<h1>You have successfully registered. Now you can use your enrollment number and password for login in to the system.</h1>";
         $header  = "MIME-Version: 1.0\r\n";
         $header  = "Content-type: text/html\r\n";
         
        
$sqlinsert = "INSERT INTO reg (name, enroll, course, contact, email, password) VALUES('$name', '$enroll', '$course', '$contact', '$email', '$password')";
if(mysqli_query($dbconn, $sqlinsert))
{
    mail ($email,$subject,$message,$header);
    echo "<script>alert('You have successfully registerd. Please check your mail.');</script>";
    }
    else{
        
     echo "<script>alert('Please, provide credential');</script>";   
    }
  
}

?>



<!DOCTYPE html >
<html>
<head>
<title>EMS for Women's Polytechnic</title>
<!--link rel="stylesheet" type="text/css" href="css/styles.css" /-->
<link rel="stylesheet" href="css/net.css">
<style>
   #material {
        height: auto;
        font-size: large;
        font-family:"Engravers MT";
        background-color: silver;
        color :black;
        margin-left: 120px;
        margin-right: 120px;
        margin-bottom:5px;
        padding-bottom:50px;
       }
        

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 100px;
    box-shadow: 0px 8px 10px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 6000;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.mySlides {display:none;}
li{
    display: inline;
    padding: 9px;
    
}
a
{
    text-decoration: none;
}
a:hover
{
         
    background-color: gray;     
}
span:hover
{
     
    background-color: gray;     
}
#mainnav li.current a:link {
	background: gray;
	color:#d0934d;
	}
 #mainnav li.current a:visited {
	background: gray;
	color:#d0934d;
    }

  
   
   #form{
    height: auto;
    width: 400px;
    opacity:0.8;
    background-color: black;
    padding:0px;
    margin-left: 35%;
    padding-bottom:50px;
    padding-top: 30px;
    
   }
   .a{
    height: 40px;
    width: 220px;
    border-radius:5px;
    margin-top: 20px;
    margin-left: 20px;
   }
   .b{
    height: 40px;
    width: 180px;
    border-radius:5px;
    margin-top: 20px;
    margin-left: 20px;
    background-color: red;
   }

</style>


</head>



<body>

    
     <img src="images/logo.png" class="logo" height="40%" width="100%" />
 
     <div id="maincontent" style="height: 80%;width:100%;">
        <div id="nav" style="width:1200px; position: relative; top: 30px; margin-left:80px;">
            <ul id="mainnav">
                <b><font size="4" face="Engravers MT">
                    <li><a href="index.php" style="padding: 8px;color: black;">Home</a></li>
                    <li><a href="ngallery.php" style="padding: 8px;color: black;">Gallery</a></li>
                    <li><a href="update.php" style="padding: 8px;color: black;">Updates</a></li>
                    <li  ><a href="about.php" style="padding: 8px;color: black;">About</a></li>
                    <li><a href="contact.php" style="padding: 8px;color: black;">Contact us</a></li>
                      
                        <!--span style="padding: 8px;" >ContactUs</span>
                            <div class="dropdown-content">
                                <li><a href="contact.php" style="padding: 8px;">Contact</a></li>
                                <li><a href="contact.php" style="padding: 8px;">Contact</a></li>
                                <li><a href="contact.php" style="padding: 8px;">Contact</a></li>
                                <li><a href="contact.php" style="padding: 8px;">Contact</a></li>
                            </div>
                    </div-->
                    <div class="dropdown">
                    
                    <!--button class="dropbtn"><li><b> <font size="4" face="Engravers MT" >STUDENT SERVICE</font></b></li></a></button-->
                        <span class="current"style="padding: 8px; "><font size="4" face="Engravers MT" >Student Service</font></span>
                            <div class="dropdown-content">
                                <li><a href="registration.php" style="padding: 4px 20px 4px 0px; text-align: left;"><font size="3" face="Engravers MT">Registration</font></a></li>
                                <li><a href="login.php" style="padding: 4px 115px 4px 0px;text-align: left"><font size="3" face="Engravers MT">Login</font></a></li>
                                <!--li><a href="contact.php" style="padding: 4px 40px 4px 40px;"><font size="3" face="Engravers MT">Contact</font></a></li>
                                <li><a href="contact.php" style="padding: 4px 40px 4px 40px;"><font size="3" face="Engravers MT">Contact</font></a></li-->
              
                                
                            </div>
                    </div>
                    </font></b>
            </ul>
            
         </div>
                <br /><br />
                
   
<div id="material">
<font size="4" face="Engravers MT" color="black" ><br />
<h1 style="margin-left: 80px;"><center><b>Registration Form</b></h1></center>
<br />
<div id="form">
<form action="#" method="post">
<center>
<font size="2" face="helvetica" color="black" >
<input type="hidden" name="submitted" value="true"/>
<input class="a" type="text" name="name" placeholder="Enter your name"/>
<input class="a" type="text" name="enrollment" placeholder="Enter your enrollment"/>
<input class="a" type="text" name="course" placeholder="Enter your course"/>
<input class="a" type="text" name="contact" placeholder="Enter your contact no."/>
<input class="a" type="email" name="email" placeholder="Enter your email"/>
<input class="a" type="password" name="password" placeholder="Enter your password"/>
<input class="b" type="submit" value="REGISTER" />
</font>
</center>
</form>
</div>
</div>

<br /><br />

                
            
            
            <br /><br /><br /><br />
            <div id="footer" style="height: 40%;width:100%">
            
            <img src="images/foot.png" class="logo" height="70%" width="100%" />
            
            </div>
    
    
    
    
    </div>

</body>
</html>
