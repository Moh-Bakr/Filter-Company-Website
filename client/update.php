<?php


include("conection.php");
$client_number=$_GET['client_number'];
$client_name=$_GET['client_name'];
$client_age=$_GET['client_age'];
$client_phone=$_GET['client_phone'];
$client_address=$_GET['client_address'];
$the_date=$_GET['the_date'];
$sql="update client set client_name='$client_name',client_age='$client_age',client_phone='$client_phone',client_address='$client_address',the_date='$the_date' where client_number='$client_number'";


mysqli_query($conn,$sql);

echo"تم تعديل";

mysqli_close($conn);



?>