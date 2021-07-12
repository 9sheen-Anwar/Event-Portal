<?php
$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);
?>
<html>
<head>
<title>Gallery</title>
<link rel="stylesheet" href="css/net.css">
<link rel="stylesheet" type"text/css" href="css/lightbox.min.css">
<script type"text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<style>
/*body{
font-family:sans-serif;
}*/
h1{
text-align:center;
margin:30px 0px 50px;
}
.gallery{
margin:10px 50px;
}
.gallery img{
width:230px;
padding:5px;
filter:grayscale(100%);
transition:ls;
    float:left;
}
.gallery img:hover{
filter:grayscale(0);
transform:scale(1.1);
}



 #material {
        height: 765px;
        width: 1050px;
        font-size: large;
        font-family:"Engravers MT";
        background-color: silver;
        color :black;
        margin-left: 90px;
        margin-right: 120px;

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
<div style="height: 100%;width:100%;">
     <div id="header" style="height: 40%;width:100%">
        <img src="images/logo.png" class="logo" height="70%" width="100%" />
     </div>
           
     <div id="maincontent" style="height: 80%;width:100%;">
        <div id="nav" style="width:1200px; position: relative; top: 30px; margin-left:110px;">
            <ul id="mainnav">
                <b><font size="4" face="Engravers MT">
                    <li><a href="index.php" style="padding: 8px;color: black;">Home</a></li>
                    <li class="current"><a href="ngallery.php"  style="padding: 8px;color: black;">Gallery</a></li>
                    <li><a href="update.php" style="padding: 8px;color: black;">Updates</a></li>
                    <li  ><a href="about.php" style="padding: 8px;color: black;">About</a></li>
                    <li><a href="contact.php" style="padding: 8px;color: black;">Contact us</a></li>
                      
                        
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

    <!--div style="height: 100%;width:100%;">
            <div id="header" style="height: 40%;width:100%">
                    <img src="images/logo.png" class="logo" height="40%" width="100%" />
            </div>
            
            <div id="maincontent" style="height: 80%;width:100%;">
            
                <div id="nav" style="height: 20%;width:100%;">
                     <ul id="mainnav">
                       <b>
                         <font size="4" face="Engravers MT" >
                              <li><a href="index.php">Home</a></li>
                              <li><a href="gallery1.php">Gallery</a></li>
                              <li><a href="page.php">Updates</a></li>
                              <li class="current"><a href="about.php">About</a></li>
                              <li><a href="contact.php">Contact</a></li>
                              <li><a href="page.php">Student Service</a></li>
                         </font>
    	                </b>
                      </ul>
            
                </div>
                <br /><br /><br /><br /-->
                <br /><br />
                <div id="material">

<br /><br />

<center>
<div class="gallery" style="height:1200px; width: 1040px;margin-left: 60px;">
<?php  $sql="SELECT * FROM tbl_uploads";
 $result_set=mysqli_query($dbconn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>


<a href="admin/upload/<?php echo $row['file'] ?>" data-lightbox="mygallery" data-title=""><img src="admin/upload/<?php echo $row['file'] ?> " alt="Event" /></a>

<?php
 }
 ?>

</div>
       
    </center>
</div>

<br /><br /><br /><br />
            <div id="footer" style="height: 50%;width:100%">
            
            <img src="images/foot.png" class="logo" height="50%" width="100%" />
            
            </div>
</body>




</html>