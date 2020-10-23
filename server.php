<?php
session_start();
// initializing variables
$password_1="";
$password_2="";
$acn="";
$staffname="";
$sno="";
$gender3="";
$designation="";
$idno="";
$salary="";
$address="";
$pincode="";
$quantity="";
$gno="";
$hname="";
$hid="";
$drname="";
$age="";
$pname="";
$gname="";
$bloodtype2="";
$gender2="";
$donarname="";
$dob1="";
$contact_no1="";
$gender1="";
$weight="";
$bloodtype1="";
$password1="";
$bloodtype="";
$username = "";
$email = "";
$errors = array(); 
$name="";
$dob="";
$contact_no="";
$surgery_details="";
$medical_details="";
$gender="";
$blood_details="";
$date1="";
// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'dbmsbloodbank');
if(!($db))
{
  echo "connection error";
}

//for login/security page of blood bank management system
if (isset($_POST['bblogin'])) {
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  if($password1!="12345"){
    echo '<script>alert("wrong password")</script>';
  }
  else{
    header('location: '.$uri.'/bbcontents.php');
  }
}


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
  // first checdb the database to madbe sure 
  // a user does not already exist with the same username and/or email
  $user_checdb_query = "SELECT * FROM register WHERE adhaarcardno='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_checdb_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    if ($user['adhaarcardno'] === $username) {
      echo '<script>alert("adhaar number already  registered")</script>';
    }
    if ($user['email'] === $email) {
      echo '<script>alert("this email already exists")</script>';
    }
}
  // Finally, register user if there are no errors in the form
  if($password_1 === $password_2){
  if (count($errors) == 0 ) {
    if(!($user))
{ $password = ($password_1);//encrypt the password before saving in the database
    $query = "INSERT INTO register (adhaarcardno, email, password) 
  			  VALUES('$username', '$email', '$password')";
    $result=mysqli_query($db, $query);
    if($result)
    {
    $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
    header('location: '.$uri.'/login1.php');
  }
}
}}
else
{
  echo '<script>alert("the two passwords do not match")</script>';
}
  }

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (count($errors) == 0) {
  	$password = ($password);
  	$query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: '.$uri.'/loginhome.php');
  	}else {
      echo '<script>alert("email and password combination wrong")</script>'; 		
  	}
  }
}

//to update details of donar who wish to donate
if(isset($_POST['updatewishtodonate']))
{
  $contact_no = mysqli_real_escape_string($db,$_POST['contact_no']);
  $medical_details = mysqli_real_escape_string($db,$_POST['medical_details']);
  if(isset($_POST['ans']))
  {
    $surgery_details = $_POST["ans"];
  }
  if(isset($_POST['blood'])){
  $blood_details = $_POST["blood"];
  }
  if (count($errors) == 0) {
    $query = "SELECT * FROM wishtodonate WHERE email='{$_SESSION['email']}' ";
  	$result = mysqli_query($db, $query); 
    if ($user=mysqli_fetch_assoc($result))
  {$query = "SELECT * FROM wishtodonate WHERE contact_no='$contact_no' ";
  $result = mysqli_query($db, $query);
  if ($user=mysqli_fetch_assoc($result)) {// if user exists
    if ($user['contact_no'] === $contact_no) {
      echo '<script>alert("contact number is already  registered")</script>';
    }  
    if ($user['email'] === $_SESSION['email']) {
    $query = "UPDATE wishtodonate SET contact_no='$contact_no',blood_donated_details='$blood_details',
    surgery_details='$surgery_details',medical_details='$medical_details'  where email='{$_SESSION['email']}' ";
     $result=mysqli_query($db, $query);
   if($result)
     {
     echo '<script>alert("data updated succesfully")</script>';
   }
   }}
   else{
    $query = "UPDATE wishtodonate SET contact_no='$contact_no',blood_donated_details='$blood_details',surgery_details='$surgery_details',medical_details='$medical_details'  where email='{$_SESSION['email']}' ";
     $result=mysqli_query($db, $query);
   if($result)
     {
     echo '<script>alert("data updated succesfully")</script>';
   }
   } 
}
else{
  echo '<script>alert("enter your details ")</script>';
}}
}
//to enter details of person who wish to donate
if(isset($_POST['wishtodonate']))
{
  $name = mysqli_real_escape_string($db,$_POST['name']);
$dob = mysqli_real_escape_string($db,$_POST['dob']);
$d=new DateTime($dob);
$now=new DateTime();
$diff = $now->diff($d);
$age= $diff->y;
iF($age<17)
{
  echo '<script>alert("you should be atleast 17  to donate blood")</script>';
}
$contact_no = mysqli_real_escape_string($db,$_POST['contact_no']);
$bloodtype = mysqli_real_escape_string($db,$_POST['bloodtype']);
$medical_details = mysqli_real_escape_string($db,$_POST['medical_details']);
if(isset($_POST['gender']))
{
  $gender = $_POST["gender"];
  }
if(isset($_POST['ans']))
{
  $surgery_details = $_POST["ans"];
}
if(isset($_POST['blood'])){
$blood_details = $_POST["blood"];
}
if (empty($medical_details)) {
  echo '<script>alert("enter medical details as none if there is")</script>';
}
if (count($errors) == 0 && $age>17) {
  $query = "SELECT * FROM wishtodonate WHERE contact_no='$contact_no'or email='{$_SESSION['email']}' ";
  $result = mysqli_query($db, $query);
  if ($user=mysqli_fetch_assoc($result)) { // if user exists
    if ($user['contact_no'] === $contact_no) {
      echo '<script>alert("this contact number is already registered")</script>';
    }
    if ($user['email'] === $_SESSION['email']) {
      echo '<script>alert("you have already entered details")</script>';
    }
  }
  else
  { 
  $query = "INSERT INTO wishtodonate(slno,name,dob,bloodgroup,gender,contact_no,blood_donated_details,surgery_details,medical_details,entered_date,email) VALUES(DEFAULT,'$name','$dob','$bloodtype','$gender','$contact_no','$blood_details','$surgery_details','$medical_details',CURDATE(),'{$_SESSION['email']}')";
  

$result1=mysqli_query($db, $query);
if($result1)
  {
    echo '<script>alert("data entered succesfully")</script>';
}}
}
}

//to enter donar values to database
if(isset($_POST['bbdonar']))
{
  $q=1;
  $donarname = mysqli_real_escape_string($db,$_POST['donarname']);
$dob1 = mysqli_real_escape_string($db,$_POST['dob1']);
$d=new DateTime($dob1);
$now=new DateTime();
$diff = $now->diff($d);
$age= $diff->y;
if($age<17)
{
  echo '<script>alert("you should be atleast 17  to donate blood")</script>';
}
$weight = mysqli_real_escape_string($db,$_POST['weight']);
$contact_no1 = mysqli_real_escape_string($db,$_POST['contact_no1']);
$bloodtype1 = mysqli_real_escape_string($db,$_POST['bloodtype1']);
  if(isset($_POST['gender1']))
  {
  $gender1 = $_POST["gender1"];
}
$query = "SELECT * FROM donar WHERE contact_no='$contact_no1'";
  $result=mysqli_query($db, $query);
if($result->num_rows>0)
{
  echo '<script>alert("they have donated blood before!!")</script>';
}
if (count($errors) == 0 && $age>17) {
 $query = "INSERT INTO donar(name,bloodgroup,gender,contact_no,weight,dob,currentdate,quantity)
  VALUES('$donarname','$bloodtype1','$gender1','$contact_no1','$weight','$dob1',CURDATE(),'$q')";
  $result=mysqli_query($db, $query);
if($result)
  {
    $query = "UPDATE blooddetails SET total=total+1 where bloodgroup='$bloodtype1' ";
  $result=mysqli_query($db, $query);
  echo '<script>alert("donor entered succesfully")</script>';
}
}
}

//to enter details of receiver to database
if(isset($_POST['bbreceiver']))
{
  $hname = mysqli_real_escape_string($db,$_POST['hname']);
  $hid = mysqli_real_escape_string($db,$_POST['hid']);
  $drname = mysqli_real_escape_string($db,$_POST['drname']);
  $pname = mysqli_real_escape_string($db,$_POST['pname']);
  $gname = mysqli_real_escape_string($db,$_POST['gname']);
  $quantity = mysqli_real_escape_string($db,$_POST['quantity']);
  $age = mysqli_real_escape_string($db,$_POST['age']);
$gno = mysqli_real_escape_string($db,$_POST['gno']);
$bloodtype2 = mysqli_real_escape_string($db,$_POST['bloodtype2']);
if(isset($_POST['gender2']))
{
  $gender2 = $_POST["gender2"];
}
if (count($errors) == 0) {
  $query = "INSERT INTO  receiver(hospital_name,hospital_id,doctor_name,pateint_name,age,gender,quantity,bloodgroup,guardian_name,contact_no,currentdate) VALUES('$hname','$hid','$drname','$pname','$age','$gender2','$quantity','$bloodtype2','$gname','$gno',CURDATE())";
  $result=mysqli_query($db, $query);
if($result)
  {
    $query = "UPDATE blooddetails SET total=total-'$quantity' where bloodgroup='$bloodtype2' ";
  $result=mysqli_query($db, $query);
    echo '<script>alert("receiver data entered succesfully")</script>';
  }
}
}

//to enter staff details to database
if(isset($_POST['bbstaff']))
{
  $staffname = mysqli_real_escape_string($db,$_POST['staffname']);
  $idno = mysqli_real_escape_string($db,$_POST['idno']);
  $designation = mysqli_real_escape_string($db,$_POST['designation']);
if(isset($_POST['gender3']))
{
  $gender3 = $_POST["gender3"];
}
$bloodtype2 = mysqli_real_escape_string($db,$_POST['bloodtype2']);
$salary = mysqli_real_escape_string($db,$_POST['salary']);
$address = mysqli_real_escape_string($db,$_POST['address']);
$pincode = mysqli_real_escape_string($db,$_POST['pincode']);
$sno = mysqli_real_escape_string($db,$_POST['sno']);
  $user_checdb_query = "SELECT * FROM staff WHERE id='$idno' OR contactno='$sno' LIMIT 1";
  $result = mysqli_query($db, $user_checdb_query);
  $user = mysqli_fetch_assoc($result);
  if ($user)
  {
  if ($user['id']=== $idno) {
    echo '<script>alert("every staff has a unique identification number")</script>';
  }
  if ($user['contactno'] === $sno) {
    echo '<script>alert("this contact no. belongs to other staff")</script>';
  }
}
  else{ // if user exists
if (count($errors) == 0) {
  $query = "INSERT INTO staff(name,id,designation,gender,bloodgroup,
  salary,address,pincode,contactno) VALUES('$staffname','$idno','$designation',
  '$gender3','$bloodtype2','$salary','$address','$pincode','$sno')";
  $result=mysqli_query($db, $query);
if($result)
  {
    echo '<script>alert("staff data entered succesfully")</script>';
}
}
}
}

//to view donar details table
if(isset($_POST['viewdonar']))
{
  $date1 = mysqli_real_escape_string($db,$_POST['date1']);
$query = "select * from donar where currentdate='$date1'";
    $result=mysqli_query($db, $query);
if($result->num_rows>0){
  echo "<table>";
echo "<tr>
<th>name</th><th>|</th>
<th>bloodgroup</th><th>|</th>
<th>gender</th><th>|</th>
<th>contact_no</th><th>|</th>
<th>weight</th><th>|</th>
<th>date of birth</th><th>|</th>
<th>donated date</th>
</tr>";
while($row=mysqli_fetch_array($result)){
echo "<tr><td>" . $row['name']."</td><td>|</td>
<td>" . $row['bloodgroup']."</td><td>|</td>
<td>" .$row['gender']."</td><td>|</td>
<td>" .$row['contact_no']."</td><td>|</td>
<td>" .$row['weight']."</td><td>|</td>
<td>" .$row['dob']."</td><td>|</td>
<td>" . $row['currentdate']."</td></tr>";   
}
echo "</table>";
}
else{
    echo '<script>alert("the table is empty")</script>';}
}

//to view receiver details table
if(isset($_POST['viewreceiver']))
{
  $date1 = mysqli_real_escape_string($db,$_POST['date1']);
$query = "select * from receiver where currentdate='$date1'";
    $result=mysqli_query($db, $query);
if($result->num_rows>0){
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
}

//to change/update address of staff
if (isset($_POST['updateaddress'])) {
  // receive all input values from the form
  $idno = mysqli_real_escape_string($db, $_POST['idno']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $pincode = mysqli_real_escape_string($db, $_POST['pincode']);
  $user_checdb_query = "SELECT * FROM staff WHERE id='$idno'";
  $result = mysqli_query($db, $user_checdb_query);
      if($result->num_rows>0){
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "UPDATE staff SET address='$address',pincode='$pincode' where id='$idno'";
    $result=mysqli_query($db, $query);
    if($result)
    {
      echo '<script>alert("updated successfully")</script>';
  }}
}
else{
  echo '<script>alert("invalid staff id")</script>';
}}

//to change/updte contact number of staff
if (isset($_POST['updatecontact'])) {
  // receive all input values from the form
  $idno = mysqli_real_escape_string($db, $_POST['idno']);
  $sno = mysqli_real_escape_string($db, $_POST['sno']);
  $user_checdb_query = "SELECT * FROM staff WHERE id='$idno'";
  $result = mysqli_query($db, $user_checdb_query);
  if($result->num_rows>0){
  if (count($errors) == 0) {
  $user_checdb_query = "SELECT * FROM staff WHERE  contactno='$sno' LIMIT 1";
  $result = mysqli_query($db, $user_checdb_query);
  $user = mysqli_fetch_assoc($result);
  if ($user)
  {
    echo '<script>alert("this contact number either belongs to you or other staff")</script>';
}
else{
  	$query = "UPDATE staff SET contactno='$sno' where id='$idno' ";
    $result=mysqli_query($db, $query);
    if($result)
    {
      echo '<script>alert("updated successfully")</script>';
  }}
}}
else{
  echo '<script>alert("invalid staff id")</script>';
}}

//to change/update salary of staff
if (isset($_POST['updatesalary'])) {
  // receive all input values from the form
  $idno = mysqli_real_escape_string($db, $_POST['idno']);
  $salary = mysqli_real_escape_string($db, $_POST['salary']);
  $user_checdb_query = "SELECT * FROM staff WHERE id='$idno'";
  $result = mysqli_query($db, $user_checdb_query);
  if($result->num_rows>0){
  if (count($errors) == 0) {
  	$query = "UPDATE staff SET salary='$salary' where id='$idno' ";
    $result=mysqli_query($db, $query);
    if($result)
    {
      echo '<script>alert("updated successfully")</script>';
  }}
}
else{
  echo '<script>alert("invalid staff id")</script>';
}}
?>