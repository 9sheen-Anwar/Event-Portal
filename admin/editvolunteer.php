<?php

$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);

$id=$_GET['id'];

$sq=mysqli_query($dbconn, ("select * from volunteerlist where id=".$id));
$r=mysqli_fetch_array($sq);

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$enroll = $_POST['enroll'];
$event = $_POST['event'];
$course = $_POST['course'];




$q="update volunteerlist set enroll='$enroll', name='$name', eventassign='$event', course='$course' where id=".$id;
$query=mysqli_query($dbconn, $q);
if($query)
{
 header("location: volunteerlist.php");
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
					<h3> <b><i>EDIT VOLUNTEER</i></b> </h3>
						<table>
							<tr>
								<td> Enrollment no.</td>
								<td> <input type="text" name="enroll" placeholder=" Enrollment" value="<?php echo $r['enroll'];?>" /></td>
							</tr>
							<tr>
								<td> Name</td>
								<td> <input type="text" name="name" placeholder="Name of Volunteer " value="<?php echo $r['name'];?>" /></td>
							</tr>
							<tr>
								<td> Event Assign</td>
								<td> <input type="text" name="event" placeholder="Event Assigned" value="<?php echo $r['eventassign'];?>" /></td>
							</tr>
								<tr>
								<td> Course</td>
								<td> <input type="text" name="course" placeholder="course" value="<?php echo $r['course'];?>" /></td>
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