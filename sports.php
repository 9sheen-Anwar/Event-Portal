<?php 

    session_start();
    $host = 'localhost';
    $user = 'root';
    $password = 'sql';
    $dbname = 'emswp';
    
    $dbconn = mysqli_connect($host,$user,$password,$dbname);
    $enr =$_SESSION['enroll'];
    //echo $enr;
if(isset($_POST['submitted']))
{
    $checkbox = $_POST['event'];
 
// We'll assume you want a maximum of 3 selections.
    $max = 3;
 
// Checks if the current submitted values are within the limit.
if (count($_POST['event']) > $max) {

 echo "<script>alert('You have selected more than 3 events. Please select only 3 event.') </script>";
}else{
    
    
        if (isset($_POST["submitted"])){
        $sql = "select * from partlist where enroll = '$enr'";
        $sqlget = mysqli_query($dbconn, $sql);
        if(mysqli_num_rows($sqlget)>0)
        {
           echo "<script>alert('You have already participated.') </script>";
            
        }else
        {
                $event = $_POST['event'];
                $x= implode(", ",$event);      //array to string
               // echo $x;
               
               
                $sqlinsert = "INSERT INTO partlist (enroll, event) VALUES('$enr','$x')";
                mysqli_query($dbconn, $sqlinsert);
            echo "<script>alert('Your events are registerd. Thanks for participating!') </script>";
      
       }
                
}
}
    }
?>


<html>
<head>
<title>EMS for Women's Polytechnic</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
  <style>
        
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
  
   #form{
    height: 970px;
    width: 700px;
    opacity:0.8;
    margin-left: 100px;
    margin-top: 20px;
   
   }
   
   #a{
    margin-left: 60px;
   }
   
   
   </style>

</head>
<body style="background-color: silver;">

<div style="height: 580px;width: auto;background-color: silver;margin-top:-10px ;margin-left: 20px;margin-right: 20px;">
<div id="form">
<br /><br />

<font size="5" face="Engravers " color="black" >
<h1><center>EVENTS</h1></center></font><br /><br /><br />
<h2>Select the events of your choice not more than 3.....</h2>
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
<form action="#" method="post" id="games">
<input type="hidden" name="submitted" value="true"/>
<?php while($r=mysqli_fetch_array($q)) { ?>
<input type="checkbox" name="event[]" id="g" value="<?php echo $r['name'];   ?>  " style="margin-left: 50px;height: 20px;width: 20px;"/>
<a href="<?php echo $r['url']?>" style="text-decoration: none;"> <?php echo $r['name']; ?></a><br /><br />
<?php } ?>

  

  <input type="submit" name="submit" value="Submit" style="margin-left: 80px; padding: 10px;width: 150px;;"/><br/>
</font>
</form>

</div>
</div>
<br/>
        
        
        
   


</body>
</html>