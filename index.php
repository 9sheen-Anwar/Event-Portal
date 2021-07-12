<!DOCTYPE html>
<html>
<title>EMS for Women's Polytechnic</title>


<link rel="stylesheet" href="css/net.css">
<style>

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
<body>
 <div style="height: 100%;width:100%;">
     <div id="header" style="height: 40%;width:100%">
        <img src="images/logo.png" class="logo" height="40%" width="100%" />
     </div>
           
     <div id="maincontent" style="height: 80%;width:100%;">
        <div id="nav" style="width:100%; position: relative; top: 50px; left:97px;">
            <ul id="mainnav">
                <b><font size="4" face="Engravers MT">
                    <li class="current"><a href="#" style="padding: 8px;color: black;">Home</a></li>
                    <li><a href="ngallery.php" style="padding: 8px;color: black;">Gallery</a></li>
                    <li><a href="update.php" style="padding: 8px;color: black;">Updates</a></li>
                    <li ><a href="about.php" style="padding: 8px;color: black;">About</a></li>
                    <li><a href="contact.php" style="padding: 8px;color: black;">Contact us</a></li>
                      <div class="dropdown">
                     
                    <div class="dropdown">
                        <span style="padding: 8px;">Student Service</span>
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
         <br /><br /><br /><br />
                
        <div class="w3-content w3-section" style="max-width:500px; position:relative; margin-left:160px">
            <img class="mySlides w3-animate-fading" src="images/jb2/1.jpg" style="width:930px; height: 500px;">
            <img class="mySlides w3-animate-fading" src="images/jb2/2.jpg" style="width:930px; height: 500px;">
            <img class="mySlides w3-animate-fading" src="images/jb2/3.jpg" style="width:930px; height: 500px;">
            <img class="mySlides w3-animate-fading" src="images/jb2/4.jpg" style="width:930px; height: 500px;">
            <img class="mySlides w3-animate-fading" src="images/jb2/5.jpg" style="width:930px; height: 500px;">
            <img class="mySlides w3-animate-fading" src="images/jb2/6.jpg" style="width:930px; height: 500px;">
            <img class="mySlides w3-animate-fading" src="images/jb2/7.jpg" style="width:930px; height: 500px;">
            <img class="mySlides w3-animate-fading" src="images/jb2/8.jpg" style="width:930px; height: 500px;">
        </div>
 
    </div>          
            
            
                     <br />

<marquee style="margin-top:20px;color: #cc0000;font-style:Engravers MT;onmousedown=this.stop();onmouseup=this.start();"><h3><b>...Event Management System For Women's Polytechnic...</b></h3></marquee>
            
    <div id="footer" style="height: 40%;width:100%">            
        <img src="images/foot.png" class="logo" height="40%" width="100%" />
    </div>
    
    
    
    
</div>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000); // Change image every 9 seconds
}
</script>

</body>
</html>
