<?php

$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);

$a=$_GET['id'];

$d_query="delete from eventlist where id=".$a;
$q=mysqli_query($dbconn, $d_query);
if($q)
{
	header("location: list.php");
}


?>