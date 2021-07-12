<?php 

session_start();
$host ="localhost";
$user = "root";
$pass ="sql";
$dbname ="emswp";
$dbconn = mysqli_connect($host,$user,$pass,$dbname);
$enr =$_SESSION['enroll'];
?>
<html>
<head>
<title>EMS for Women's Polytechnic</title>

<style>
#block1{
    
    margin-top: 14px;
    width:25%;
    height:579px;
    border:3px solid black;
    background-color: gray;

}
li{
    padding:5px;
    cursor: pointer;
    color:black;
    font-size: large;
    margin-bottom: 20px;

}
li:hover{
    color:blue;
}
#frame{
     margin-top: -585px;
     margin-left:26%;
     width: 74%;
     height:579px;
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
<div>
<img src="images/logo.png" class="logo" height="200px" width="100%" /><br />
</div>
<div style="width: 100%;height: 50;background-color: black;margin-top: -5px">
<center><h1 style="margin-top: -5px;font-style:italic;color: white;">DASHBOARD</h1></center>
</div>
<div id="block1">
<?php 
$sql = "select * from reg where enroll = '$enr'";
$sqlget = mysqli_query($dbconn, $sql);
?>
<?php 

while($row = mysqli_fetch_array($sqlget, MYSQLI_ASSOC)){
?>
<div style="height: 20%;width: 50%; margin-left: 20%"><img src="images/adminpic.png"/></div>
<h3 style="text-align: left; color:black; margin-left:40px">NAME:<?php echo ($row['name']); ?></h3>
<h3 style="text-align: left; color:black; margin-left:40px">ENROLLMENT:<?php echo ($row['enroll']); ?></h3>
<h3 style="text-align: left; color:black; margin-left:40px">COURSE:<?php echo ($row['course']); ?></h3>
<ul><b>

<?php } ?>
<!--a href="manage.php" target="ouriframe" style="margin-right: 50%; margin-left: 50%;">Add</a>
<a href="list.php" target="ouriframe" style="margin-right: 50%; margin-left: 50%;">List</a-->


<!--li><b>Name</b></li></button-->
 
<li><a href="function.php" target="ouriframe">Event participation</a></li>
<li><a href="volreq.php" target="ouriframe">Volunteer Participation</a></li>
<li><a href="registeredlist.php" target="ouriframe">Registered Event</a></li>
<li><a href="index.php">Home</a></li>
<li><a href="logout.php">Logout</a></li>

</b>
</ul>

</div>
<div id="frame">
<iframe frameborder="1" width="96%" height="90%" src="sinitial.php" name="ouriframe" id="ouriframe" style="margin-left: 16px ;margin-top: 19px">
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