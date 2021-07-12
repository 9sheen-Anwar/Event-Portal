<?php

$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);

$id=$_GET['id'];

$sq=mysqli_query($dbconn, ("select * from eventlist where id=".$id));
$r=mysqli_fetch_array($sq);

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$venue=$_POST['venue'];


$q="update eventlist set name='$name', date='$date', time='$time', venue='$venue' where id=".$id;
$query=mysqli_query($dbconn, $q);
if($query)
{
 header("location: list.php");
}
}

?>

<html>
	<head>
		<title> WD-2018 </title>
	</head>	
	
	<body>
	
			<div id="con"> 
            
				<center>
					<form name="login" method="post" enctype="multipart/form-data">
					<h1> <b><i>EDIT EVENT</i></b> </h1>
						<table>
							<tr>
								<td> Name</td>
								<td> <input type="text" name="name" placeholder=" Name of event" value="<?php echo $r['name'];?>" /></td>
							</tr>
							<tr>
								<td> Venue</td>
								<td> <input type="text" name="venue" placeholder="venue " value="<?php echo $r['venue'];?>" /></td>
							</tr>
							<tr>
								<td> Date</td>
								<td> <input type="text" name="date" placeholder="date" value="<?php echo $r['date'];?>" /></td>
							</tr>
								<tr>
								<td> Time</td>
								<td> <input type="text" name="time" placeholder="time" value="<?php echo $r['time'];?>" /></td>
							</tr>
							
							<tr>
								<td> </td>
								<td> <input type="submit" name="submit"></td>
							</tr>

						</table>
					</form>

				</center>
				
			</div>
	

	</body>


</html>