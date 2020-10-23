<?php include('server.php') ?>
<!DOCTYPE html>
<html>
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
<form method="post" action="viewreceiver.php">
<?php include('errors.php'); ?>
<p>enter the date for which you want to see receiver details:
<input type="date" name="date1" required value="<?php echo $date1; ?>"><p>
<button type="submit" class="btn" name="viewreceiver">submit</button></br></br>
<a href="viewfullreceiver.php" >click to see the entire receiver table</a>
</form>
</body>
</html>