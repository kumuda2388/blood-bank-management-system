<!DOCTYPE html>
<head>
<title>view blood details</title>
</head>
<style>
body{
   color:white;
   font-size:25px;
   background-image:url("dbmsbb.png");
}
table{
    border-collapse:collapse;
    width:100%;
    font-size:25px;
    text-align: left;
    cell-padding:10;
}
th{
    text-decoration:underline;
}
</style>
<body onload="if (document.referrer == '') self.location='bblogin.php';">
<?php
$db1 = mysqli_connect('localhost', 'root', 'root', 'dbmsbloodbank');
if(!($db1))
{
  echo "connection error";
}
$query = "select * from blooddetails";
$result=mysqli_query($db1, $query);
echo "<table>";
echo "<tr>
<th>bloodgroup</th><th>|</th>
<th>no. of blood units available in blood bank</th>
</tr>";
if($result->num_rows>0){
while($row=mysqli_fetch_array($result)){
echo "<tr><td>" . $row['bloodgroup']."</td><td>|</td><td>" .$row['total']."</td></tr>";   
}
echo "</table>";
}
else{
    echo '<script>alert("the table is empty")</script>';
}
?>
</body>
</html>