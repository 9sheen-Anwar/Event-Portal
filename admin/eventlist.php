
<html>
<head><title>manage event</title>
<style>

#block2{
    border: 2px solid gray;
    width: 100%;
    height: auto;
    float:left;
    margin-top: 5px;
    background-color: silver;
}
label{
    margin-left: 30px;
    margin-top: 30px;    
}

input ,[type=text] ,[type=date], [type=time]
{
    padding:3px;
    width:300px;
    margin-bottom: 5px;
    margin-top: 30px;       
} 
th{
    border:3px solid gray;
    margin-left:30px;
    width:300px;
   /* background-color: blue;*/
    
}
td{
    text-align:center;
    border-bottom: 1px solid gray;
    /*background-color: blue;*/
}


#eventlist tr:nth-child(even){background-color:#e6ffe6;}
#eventlist tr:nth-child(odd){background-color: #a3c2b8;}
#eventlist tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #a3c2b8;
    color: black;
}

</style>

</head>
<body>
<div id="page">
<div id="block2">
<h1 align="center"><b>LIST OF EVENTS</b></h1>
<div id="block3" style="width:auto; border:3px solid black; margin-left: 40px; height:auto; margin-right: 40px;">
<table id="eventlist" style="border-collapse:collapse">

<?php
$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);
$select_q="select * from eventlist";
$q=mysqli_query($dbconn, $select_q);

?>

<tr>
<th>NAME</th>
<th>DATE</th>
<th>VENUE</th>
<th>TIME</th>

</tr>

<?php while($r=mysqli_fetch_array($q)) { ?>

<tr>
<td><?php echo $r['name']; ?></td>
<td><?php echo $r['date']; ?></td>
<td><?php echo $r['venue']; ?></td>
<td><?php echo $r['time']; ?></td>
    </tr>
<?php } ?>

</table>
</div>
</div>
</div>
</body>
</html>