<?php 
session_start();
$host ="localhost";
$user = "root";
$pass ="sql";
$dbname ="emswp";
$dbconn = mysqli_connect($host,$user,$pass,$dbname);

$uname = $_SESSION['username'];


?>
<!DOCTYPE html>
<html>
<head>
<title>EMS for Women's Polytechnic</title>

<style>
#block1{
    
    margin-top: 2%;
    width:25%;
    height:640px;
    border:3px solid black;
    background-color: gray;


}
li{
    padding:5px;
    cursor: pointer;
    color:black;
    font-size: large;
    margin-bottom: 20px;
    list-style-type:disc;
}
li:hover{
    color:blue;
}
#frame{
     margin-top: -645px;
     margin-left:27%;
     
     height:639px;
     border:3px solid black;
     background-color: gray;

    
}
a{
    color:black;
    text-decoration: none;
}


.dropbtn {
    background-color: gray;
    color: black;
    border: none;
    cursor: pointer;
    z-index:1000;
    font-family: "Times New Roman", Times, serif;
    font-size: 20px;
    margin-left: -2px;

 
}

.dropdown {
    position: relative;
    display: inline-block;
    
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1000;
    margin-left: 74px;
    margin-top:-35px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1; color:blue}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>
<body>

<img src="../images/logo.png" class="logo" height="245px" width="100%" /><br />

<div style="width: 100%;height: 20;background-color: black;margin-top: 0px">
<center><h1 style="margin-top: 5px;font-style:italic;color: white;">DASHBOARD</h1></center>
</div>
<div id="block1">
<?php 
$sql = "select * from admin where enroll = '$uname'";
$sqlget = mysqli_query($dbconn, $sql);
?>
<?php 

while($row = mysqli_fetch_array($sqlget, MYSQLI_ASSOC)){
?>



<div style="margin-left: 20%; font-size:large"><img src="adminpic.png"/><br />
Name:<?php echo ($row['name']); ?><br />
Course:<?php echo ($row['course']); ?><br />
Enrollment:<?php echo ($row['enroll']); ?><br />

</div>

<?php } ?>

<!--a href="manage.php" target="ouriframe" style="margin-right: 50%; margin-left: 50%;">Add</a>
<a href="list.php" target="ouriframe" style="margin-right: 50%; margin-left: 50%;">List</a-->
<br /> <br />
<div id = "" style="margin-left: 10%;"><b>
<div class="dropdown">
  <button class="dropbtn"><li><b>Event</b></li></button>
  <div class="dropdown-content">
    <a href="addevent.php" target="ouriframe">ADD</a>
    <a href="edit1.php"  target="ouriframe">EDIT</a>
    <a href="edit1.php"  target="ouriframe">DELETE</a>
  </div>
  </div><br />
  <div class="dropdown">
  <button class="dropbtn"><li><b>Volunteer</b></li></button>
  <div class="dropdown-content">
    <a href="addvolunteer.php" target="ouriframe">ADD</a>
    <a href="edit2.php" target="ouriframe">EDIT</a>
    <a href="edit2.php"target="ouriframe">DELETE</a>
    <a href="volreqlist.php"target="ouriframe">VOLUNTEER REQUEST</a>
  </div>
  </div>


<li><a href="studentlist.php" target="ouriframe">Participant</a></li>
<li><a href="result.php" target="ouriframe">Result</a></li>
<li><a href="imgupload.php" target="ouriframe">Gallery</a></li>
<li><a href="interact.php" target="ouriframe">Interaction</a></li>
<li><a href="notification.php" target="ouriframe">Notification</a></li>
<li><a href="alogout.php" target="">Logout</a></li>

</b>
</ul>
</div>
</div>
<div id="frame">
<iframe frameborder="1" width="96%" height="90%" src="initial.php" name="ouriframe" id="ouriframe" style="margin-left: 16px ;margin-top: 19px">
</iframe>
<!--a href="addevent.php" target="ouriframe" style="margin-right: 50%; margin-left: 50%;">Add</a>
<a href="list.php" target="ouriframe" style="margin-right: 50%; margin-left: 50%;">List</a-->



</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="footer" style="width: 100%;height:20%;background-color: black; margin-top: auto">
<br />
<center><h3 style="color: white"> &copy; Copyright 2017 University Womens Polytechnic  | All Rights Reserved <br /></h3>    </center>


</div>
</body>
</html>