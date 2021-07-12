<!DOCTYPE html >
<html>
<head>
<title>EMS for Women's Polytechnic</title>
<!--link rel="stylesheet" type="text/css" href="css/style.css" /-->
<link rel="stylesheet" href="css/net.css">


</head>
<body>
 <div style="height: 100%;width:100%;">
     <div id="header" style="height: 40%;width:100%">
        <img src="images/logo.png" class="logo" height="40%" width="100%" />
     </div>
           
     <div id="maincontent" style="height: 80%;width:100%;">
        <div id="nav" style="width:1200px; position: relative; top: 30px; margin-left:90px;">
            <ul id="mainnav">
                <b><font size="4" face="Engravers MT">
                    <li><a href="index.php" style="padding: 8px;color: black;">Home</a></li>
                    <li><a href="ngallery.php" style="padding: 8px;color: black;">Gallery</a></li>
                    <li class="current"><a href="update.php" style="padding: 8px;color: black;">Updates</a></li>
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
        
        <style>
        
        #mainnav li.current a:link {
	background: gray;
	color:#d0934d;
	}
 #mainnav li.current a:visited {
	background: gray;
	color:#d0934d;
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
        td{
            padding-left: 100px;
            text-align:left;
            
           }
           th{
            
                padding-left: 100px;
                text-align: left;
           }
        /*   tr{
            text-align:left;
           }*/

   
   #a{
    margin-left: 60px;
   }
   
   
   </style>
   
   
   
   <marquee style="behavior:scroll direction:left;margin-top: 50px;color:  #cc0000;font-style:Engravers MT"><h3><b>...POLYWEEK IS ARRIVING SOON...</b></h3></marquee>


<div style="height: 580px;width: 1000px;background-color: silver;margin-top:40px ;margin-left: 120px;margin-right: 20px;">
<div id="form">
<br /><br />

<font size="5" face="Engravers " color="Black" >
<h1><center><b>Upcoming Events</b></h1></center></font><br />

<br /><br />
<font size="4" face="Helvetica  " color="black" >
<div id="a">
<?php
$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);
$select_q="select * from eventlist";
$q=mysqli_query($dbconn, $select_q);

?>
<br/>
<table>
<tr >
<th>Name of Event</th>
<th>Date</th>
<th>Venue</th>
<th>Time</th>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<?php while($r=mysqli_fetch_array($q)) { ?>


<tr>
<td><?php echo $r['name'];  ?></td>
<td><?php echo $r['date'];  ?></td>
<td><?php echo $r['venue'];  ?></td>
<td><?php echo $r['time'];  ?></td>
</tr>



<?php } ?>
</table>


  


</font>

</div>
    
    
    
    
</div>
</div>
<br/><br/><br/><br/><br/>
        
        
        
        
        
        
      <div id="footer" style="height: 40%;width:100%">
            
            <img src="images/foot.png" class="logo" height="40%" width="100%" />
            
            </div>

</div>
</body>
</html>