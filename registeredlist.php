<!DOCTYPE html>
<html >
<head>
    
    <title>Document</title>
    
    <style>
    a{
        background-color:black;
        color:red;
        padding:20px;
        text-decoration:none;
        width:80px;
        
        
    }
    
    
    </style>
</head>
<body>
<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';
$enr =$_SESSION['enroll'];
$dbconn = mysqli_connect($host,$user,$pass,$dbname);
$select_q="select * from partlist where enroll = '$enr' ";
$q=mysqli_query($dbconn, $select_q);

?>
<br/>
<table>
<tr>
<th><h1><center>Event in which you have participated</center></h1></th>
</tr>
<?php while($r=mysqli_fetch_array($q)) { ?>


<tr>
<td><h3><?php 
echo $r['event']; ?></h3></td>

</tr>

<?php } ?>
    </table><br /><br />
    <a href="updatesport.php">UPDATE</a>
</body>
</html>