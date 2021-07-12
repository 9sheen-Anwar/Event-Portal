<?php

if (isset($_POST['submitted']))
{
$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);


$name = $_POST['name'];
$venue = $_POST['venue'];
$time = $_POST['time'];
$date = $_POST['date'];
$url = $_POST['url'];
$sqlinsert = "INSERT INTO eventlist (name, date, venue, time, url) VALUES('$name','$date','$venue','$time', '$url')";


if(mysqli_query($dbconn, $sqlinsert) )
{
    
    echo "<script>alert('successfully added')</script>";
}
else
{
     echo "<script>alert('Couldn't added)</script>";
    
}
}
?>









<html>
<head><title>manage event</title>
<style>

#block2{
    border: 2px solid gray;
    width: 90%;
    height: 93%;
    margin-left: 7%;
    margin-top: 40px;
    background-color: silver;
}
label{
margin-left: 30px;
margin-top: 30px;    
    
}

input ,[type=text] ,[type=date], [type=time]
{
    padding:4px;
    width:300px;
    margin-bottom: 5px;
    margin-top: 30px;       
} 

</style>

</head>
<body>
<div id="page">
<div id="block2" >
<h1 style="margin-left: 200px;"> ADD EVENT</h1>
<a href="list.php" target="ouriframe" style="background-color: black; margin-left: 75%; margin-top:-80px; padding:20px; text-decoration:none; color:red;"><b>LIST OF EVENTS</b></a>
<div id="block3" style="width: 500px; border:3px solid black; margin-left: 40px;">
<form action="#" method="post">
<input type="hidden" name="submitted" value="true" /> 
<label>NAME OF EVENT:</label>
<input type="text" name="name" style="margin-left: 13px;" /><br />
<label>DATE OF EVENT:</label>
<input type="date" name="date"  style="margin-left: 17px;"/><br />
<label>VENUE OF EVENT:</label>
<input type="text" name="venue" /><br />
<label>TIME OF EVENT:</label>
<input type="time" name="time" style="margin-left: 15px;" /><br />
<label>URL:</label>
<input type="text" name="url" style="margin-left: 101px;" /><br />
<button type="submit" style="float: right; margin-right: 40px; margin-top:20px;">Submit</button><br />

<!--input type="submit"  name="submitted" value="submit"style="float: right; margin-right: 30px; margin-top:5px;"/--><br/>

</form>
</div>
</div>
</div>
</body>
</html>