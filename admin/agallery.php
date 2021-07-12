<html>
<head><title>gallery</title>
<style>
img{
    width:100px;
    height:100px;  
    border:2px solid black;
}

table{
    width:auto;
    padding: 50px;
    border: 2px solid gray;
    
}

td{
    border:1px solid black;
    width:auto;
    text-align:left;
    padding:5px;
}
.x{
 width: 400px; background-color: #a3c2b8;   
}
table{
    background-color: silver;
}
.y{
    background-color: whitesmoke;
}
</style>




</head>
<body>
<a href="editgallery.php" target="ouriframe" style="background-color: black; margin-left: 75%; margin-top:-20px; padding:20px; text-decoration:none; color:red;"><b>ADD IMAGES</b></a>
<div id="block3" style="width: 500px; border:3px solid black; margin-left: 40px;">
<center><table>
<?php 
$host='localhost';
        $user='root';
        $pass='sql';
        $dbname='emswp';
        $dbconn=mysqli_connect($host,$user,$pass,$dbname);
        
        $select_q ="select * from image";
        $q = mysqli_query($dbconn, $select_q);
        
        
        
        ?>

<tr>

<td class="y"><a href="" target="_self"><?php echo "<img src='images/".$r['photo']."'>" ?>
</a></td>
<td class="x"><dl><dd><b>POLY WEEK-2017-18</b></dd><br /><dfn>Sport event</dfn></dl></td>
</tr>
<tr>
<td class="y"><a href="../images/jb2/2.jpg" target="_self"><img src="../images/jb2/2.jpg" /></a></td>
<td class="x"><dl><dd><b>POLY WEEK-2017-18</b></dd><br /><dfn>Sport event</dfn></dl></td>
</tr>
<tr>
<td class="y"><a href="../images/jb2/3.jpg" target="_self"><img src="../images/jb2/3.jpg" /></a></td>
<td class="x"><dl><dd><b>POLY WEEK-2017-18</b></dd><br /><dfn>Sport event</dfn></dl></td>
</tr>
<tr>
<td class="y"><a href="../images/jb2/4.jpg" target="_self"><img src="../images/jb2/4.jpg" /></a></td>
<td class="x"><dl><dd><b>POLY WEEK-2017-18</b></dd><br /><dfn>Sport event</dfn></dl></td>
</tr>
<tr>
<td class="y"><a href="../images/jb2/5.jpg" target="_self"><img src="../images/jb2/5.jpg" /></a></td>
<td class="x"><dl><dd><b>POLY WEEK-2017-18</b></dd><br /><dfn>Sport event</dfn></dl></td>
</tr>
<tr>
<td class="y"><a href="../images/jb2/6.jpg" target="_self"><img src="../images/jb2/6.jpg" /></a></td>
<td class="x"><dl><dd><b>POLY WEEK-2017-18</b></dd><br /><dfn>Sport event</dfn></dl></td>
</tr>
<tr>
<td class="y"><a href="../images/jb2/7.jpg" target="_self"><img src="../images/jb2/7.jpg" /></a></td>
<td class="x"><dl><dd><b>POLY WEEK-2017-18</b></dd><br /><dfn>Sport event</dfn></dl></td>
</tr>

</table>
</center>









</body>
</html>