<?php
include ('../connect.php');
$name=$_GET['name'];
$phone=$_GET['phone'];
$address=$_GET['address'];
$date=$_GET['date'];
$problem=$_GET['problem'];
$available=$_GET['available'];
$sql="update services set phone='$phone' ,address='$address' , date='$date' , problem='$problem' , available='$available' where name='$name'";
if (mysqli_query($conn,$sql))
	header("refresh:1;url=../print.php");
else 	
	echo "no Deleted record";

?>

