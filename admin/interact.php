<html>
<head><title>manage event</title>
<style>

#block2{
    border: 2px solid gray;
    width: 940px;
    height: auto;
    float:left;
    margin-top: 5px;
    background-color: silver;
}
label{
margin-left: 10px;
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
    width:100px;
    padding: 40px;
    color:black;
    
    
    
}
td{
    text-align:center;
    border-bottom: 1px solid gray;
    width:100px;
    
}

#customers tr:nth-child(even){background-color:#e6ffe6;}
#customers tr:nth-child(odd){background-color: #a3c2b8;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #a3c2b8;
    /*color: white;*/
}
.w{
    width:50px;
    padding: 146px;
    text-align: center;
}
</style>

</head>
<body>
<div id="page">
<div id="block2">
<h1 align="center">Feedback Messages</h1>
<div id="block3" style="width:900px; border:3px solid black; margin-left: 15px; height:auto; margin-right: 4px;">
<table id="customers" style="background-collapse:collapse " >


<?php
$host = 'localhost';
$user = 'root';
$pass = 'sql';
$dbname = 'emswp';

$dbconn = mysqli_connect($host,$user,$pass,$dbname);
$select_q="select * from feedback";
$q=mysqli_query($dbconn, $select_q);

?>
<tr>
<th>NAME</th>
<th>EMAIL</th>
<th>SUBJECT</th>
<th class="w">MESSAGE</th>
</tr>

<?php while($r=mysqli_fetch_array($q)) { ?>

<tr>
<td><?php echo $r['name']; ?></td>
<td><?php echo $r['email']; ?></td>
<td><?php echo $r['subject']; ?></td>
<td><?php echo $r['message']; ?></td>
    </tr>
<?php } ?>


</table>
</div>
</div>
</div>





</body>





</html>