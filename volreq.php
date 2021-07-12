<?php

if (isset($_POST['submitted']))
{
$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);


$name = $_POST['name'];
$enroll = $_POST['enroll'];
$event = $_POST['event'];
$course = $_POST['course'];

$sqlinsertreq = "INSERT INTO volreq (enroll, name, eventassign, course) VALUES('$enroll','$name','$event','$course')";
$sqlinsert = "INSERT INTO volunteerlist (enroll, name, eventassign, course) VALUES('$enroll','$name','$event','$course')";
mysqli_query($dbconn, $sqlinsertreq);
mysqli_query($dbconn, $sqlinsert);
}
?>





<html>
<head><title>manage event</title>
<style>

#block2{
    border: 2px solid gray;
    width: 80%;
    height: 88%;
    margin-left: 15%;
    margin-top: 50px;
    background-color: silver;
}
label{
margin-left: 30px;
margin-top: 30px;   
display: inline-block; 
    
}

input ,[type=text] ,[type=date], [type=time]
{
    padding:3px;
    width:260px;
  
    margin-top: 23px; 
    display: inline-block; 
    float:right;
    margin-right:30px;
         
} 
</style>

</head>
<body>
<div id="page">
<div id="block2" >
<h1 style="margin-left: 200px;"><b> ADD VOLUNTEER</b></h1>

<div id="block3" style="width: 500px; border:3px solid black; margin-left: 40px; height:280px;">
<form action="#" method="post">
<input type="hidden" name="submitted" value="true" /> 
<label>ENROLMENMT NO.:</label>
<input type="text" name="enroll"><br>
<label>NAME OF VOLUNTEER:</label>
<input type="text" name="name"><br>
<label>EVENT NAME:</label>
<input type="text" name="event"><br>
<label>COURSE:</label>
<input type="text" name="course"><br>
<button input type="submit" style="float: right; margin-right: 40px; margin-top:30px;">Submit</button><br />
</form>
</div>
</div>
</div>





</body>





</html>