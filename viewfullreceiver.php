<!DOCTYPE html>
<head>
<title>view receiver details</title>
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
    font-size:15px;
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
$query = "select * from receiver";
    $result=mysqli_query($db1, $query);
echo "<table>";
echo "<tr>
<th>hospital_name</th><th>|</th>
<th>hospital_id</th><th>|</th>
<th>doctor_name</th><th>|</th>
<th>patient_name</th><th>|</th>
<th>bloodgroup</th><th>|</th>
<th>age</th><th>|</th>
<th>gender</th><th>|</th>
<th>quantity</th><th>|</th>
<th>guardian_name</th><th>|</th>
<th>contact_no</th><th>|</th>
<th>received date</th><th>|</th>
</tr>";
if($result->num_rows>0){
while($row=mysqli_fetch_array($result)){
echo "<tr><td>" . $row['hospital_name']."</td><td>|</td>
<td>" . $row['hospital_id']."</td><td>|</td>
<td>". $row['doctor_name']."</td><td>|</td>
<td>". $row['pateint_name']."</td><td>|</td>
<td>". $row['bloodgroup']."</td><td>|</td>
<td>". $row['age']."</td><td>|</td>
<td>". $row['gender']."</td><td>|</td>
<td>". $row['quantity']."</td><td>|</td>
<td>". $row['guardian_name']."</td><td>|</td>
<td>". $row['contact_no']."</td><td>|</td>
<td>" .$row['currentdate']."</td></tr>";   
}
echo "</table>";
}
else{
    echo '<script>alert("the table is empty")</script>';}
?>
</body>
</html>