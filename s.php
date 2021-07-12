<html>
<head>
<title>Ems</title>

</head>
<body>
<style>
  
   #form{
    height: 700px;
    width: 400px;
    opacity:0.8;
    margin-left: 10px;
    margin-top: 20px;
    background-color: gray;
   }
   
   #a{
    margin-left: 60px;
   }

   </style>
   <div >
<div id="form">
<br /><br />

<font size="5" face="Engravers " color="red" >
<h1><center>EVENTS</h1></center></font>
<br /><br /><br />
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
<form action="php-forms-get-post-checkbox-radio-data.php" method="post">
<?php while($r=mysqli_fetch_array($q)) { ?>


<input type="checkbox" name="event" value=""/><a href="dodgeball.php"><?php echo $r['name']; ?></a><br/><br/>

<?php } ?>

  

  <input type="submit" name="submit" value="Submit"/><br/>
</font>
</form>
</div>
    
    
    
    
</div>
</div>
<br/>


</div>
</body>
</html>
