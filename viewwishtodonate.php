<!DOCTYPE html>
<head>
<title>view wish to donate details</title>
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
    font-size:10px;
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
$query = "select * from wishtodonate";
    $result=mysqli_query($db1, $query);
echo "<table>";
echo "<tr>
<th>name</th><th>|</th>
<th>date of birth</th><th>|</th>
<th>bloodgroup</th><th>|</th>
<th>gender</th><th>|</th>
<th>contact_no</th><th>|</th>
<th>blood donated in last 3 months?</th><th>|</th>
<th>had a surgery in last three months?</th><th>|</th>
<th>medical details</th><th>|</th>
<th>details entered date</th><th>|</th>
</tr>";
if($result->num_rows>0){
while($row=mysqli_fetch_array($result)){
echo "<tr><td>". $row['name']."</td><td>|</td>
<td>" . $row['dob']."</td><td>|</td>
<td>". $row['bloodgroup']."</td><td>|</td>
<td>" .$row['gender']."</td><td>|</td>
<td>" .$row['contact_no']."</td><td>|</td>
<td>". $row['blood_donated_details']."</td><td>|</td>
<td>" .$row['surgery_details']."</td><td>|</td>
<td>" .$row['medical_details']."</td><td>|</td>
<td>" . $row['entered_date']."</td></tr>";   
}
echo "</table>";
}
else{
    echo '<script>alert("the table is empty")</script>';}
?>
</body>
</html>