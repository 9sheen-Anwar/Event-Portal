<?php 
if (isset($_POST['submitted']))
{
$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);
	
    $name = $_POST['name'];
	$email = $_POST['email'];	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$sqlinsert = "INSERT INTO feedback (name, email, subject, message) VALUES ('$name','$email','$subject','$message')";

if(mysqli_query($dbconn, $sqlinsert))
{
        echo "<script>alert('Message sent')</script>";
        
        }
  
}
?>




<!DOCTYPE html >
<html>
<head>

<title>EMS for Women's Polytechnic</title>
<!--link rel="stylesheet" type="text/css" href="css/style.css" /-->
<link rel="stylesheet" href="css/net.css">
<link type="text/css" href="css/constyle.css" rel="stylesheet" media="all" />

<style>
   #material {
        height: 80%;
        
        font-size: large;
        font-family:"Engravers MT";
        background-color:silver;
        color :black;
        margin-left: 120px;
        margin-right: 120px;
        margin-bottom:5px;
       
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


</style>



</head>

<body>


        <img src="images/logo.png" class="logo" height="40%" width="100%" />
  
           
     <div id="maincontent" style="height: 80%;width:100%;">
        <div id="nav" style="width:1200px; position: relative; top: 30px; margin-left:110px;">
            <ul id="mainnav">
                <b><font size="4" face="Engravers MT">
                    <li><a href="index.php" style="padding: 8px;color: black;">Home</a></li>
                    <li><a href="gallery.php" style="padding: 8px;color: black;">Gallery</a></li>
                    <li><a href="update.php" style="padding: 8px;color: black;">Updates</a></li>
                    <li  ><a href="about.php" style="padding: 8px;color: black;">About</a></li>
                    <li class="current"><a href="contact.php" style="padding: 8px;color: black;">Contact us</a></li>
                      
                    <div class="dropdown">
                    
                    <!--button class="dropbtn"><li><b> <font size="4" face="Engravers MT" >STUDENT SERVICE</font></b></li></a></button-->
                        <span style="padding: 8px;"><font size="4" face="Engravers MT" >Student Service</font></span>
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

    <br/> 

	           <div style="height: 780px;width: 1000px;background-color: silver;margin-top:50px ;margin-left: 110px;margin-right: 20px;">
               <br />
				<div id="contactleft" style="margin-left: 50px;margin-top: 50px">
					<h3><b>Address</b></h3> 
                    <h3><b> University Womens Polytechnic </b></h3>
                    <h5>Aligarh Muslim University</h5>
                    <h5>Aligarh-202002</h5>
                    <h5>Contact No.: 09879119567</h5>
                    <h5>E-mail: universitywomen'spoly@gmail.com</h5>
				</div><br>
				<div id="contactright" style="margin-left: 50px;margin-right: 100px;">
					<h3>Feedback Form</h3>
					<form action="#" method="POST">
                        <p>
                            <input type="hidden" name="submitted" value="true"/>
                            <label for="name" class="required label">Name:</label><br/>
                            <input id="name" class="contactform" type="text" name="name" />
                        </p>
                        <p>
                            <label for="email" class="required label">Email:</label><br>
                            <input id="email" class="contactform" placeholder="Example: abc@ab.com" type="text" name="email" />
                        </p>
                        <p>
                            <label for="subject" class="required label">Subject:</label><br>
                            <input id="subject" class="contactform" type="text" name="subject" />
                        </p>
                        <p>
                            <label id="message-label" for="message" class="required label">Message:</label><br>
                            <textarea id="message" class="contactform" name="message" cols="28" rows="5"></textarea>
                        </p>
                        <p>
                            <label></label>
                            <input class="contactform" id="submit-button" type="submit" name="Submit" value="Submit" style="height: 35px;" />
                        </p>
                    </form>
				</div>
               	<div class="column-clear"></div>
            </div>
			<div class="clearfix"></div>
        
  
  
  
    		        <br /><br /><br /><br />
            <div id="footer" style="height: 40%;width:100%">
            
            <img src="images/foot.png" class="logo" height="40%" width="100%" />
            
            </div>
    
    

</div>
</body>
</html>
