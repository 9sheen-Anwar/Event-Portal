<?php
define('host', 'localhost');
define('user', 'root');
define('password', 'sql');
define('database', 'emswp');
$db = mysqli_connect(host,user,password,database);
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    // escape special character
     $username = mysqli_real_escape_string($db,$_POST['username']);
     $password = mysqli_real_escape_string($db,$_POST['password']);
   
   $sql= "SELECT id FROM admin WHERE enroll = '$username' and password = '$password'";
   
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $active = $row['active'];
   
   $count = mysqli_num_rows($result);
   
   if($count == 1)
   {
    
    $_SESSION["username"]= "$username";
    header("location: aindex.php");
    
   }else
   {
    echo "<script>alert('Incorrect username and password')</script>";
   
   }
    
}
        
   
?>






<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>
<br/><br/><br/><br/><br/><br/><br/><br/>
            
    
        
    	
        
					<center>
     
					<div class="accordion-content">
                    <font size="3" face="Engravers MT" color="black" >
<h1 style="margin-left: 80px;">Login Form</h1>
						<form action="#" method="post" style=" background-color: gray; width:50%;height: 300px;" >
                        <br /><br /><br /><br /><br />
						<span style="margin-right: 11px;">Enter User Name: <input type="text" name="username"  style="width: 165px; margin-left: 26px; border: 3px double #CCCCCC; padding:5px 10px;"required/></span><br /><br />
                        <span style="margin-right: 11px;">Enter Password: <input type="password" name="password" style="width: 165px; margin-left: 34px; border: 3px double #CCCCCC; padding:5px 10px;"required /></span><br /><br /><br />
						<input type="submit" id="submit" value="Admin login" style="height: 34px; margin-left: 10px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
					</div>
     
                    </center>
		
				
   	
</body>
</html>
