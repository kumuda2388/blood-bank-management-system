<!DOCTYPE html>
<head>
<title>view staff details</title>
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
$query = "select * from staff";
    $result=mysqli_query($db1, $query);
echo "<table>";
echo "<tr>
<th>name</th><th>|</th>
<th>id</th><th>|</th>
<th>designation</th><th>|</th>
<th>gender</th><th>|</th>
<th>salary</th><th>|</th>
<th>address</th><th>|</th>
<th>pincode</th><th>|</th>
<th>contact_no</th>
</tr>";
if($result->num_rows>0){
while($row=mysqli_fetch_array($result)){
echo "<tr><td>" . $row['name']."</td><td>|</td>
<td>" . $row['id']."</td><td>|</td>
<td>" .$row['designation']."</td><td>|</td>
<td>" .$row['gender']."</td><td>|</td>
<td>" .$row['salary']."</td><td>|</td>
<td>" .$row['address']."</td><td>|</td>
<td>" . $row['pincode']."</td><td>|</td>
<td>" .$row['contactno']."</td></tr>";   
}
echo "</table>";
}
else{
    echo '<script>alert("the table is empty")</script>';}
?>
</body>
</html>