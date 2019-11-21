<?php

include("conection.php");
//$sql="insert into client values ('$_REQUEST[client_number]','$_REQUEST[ client_name]','$_REQUEST[client_age]','$_REQUEST[client_phone]','$_REQUEST[ client_adress]','$_REQUEST[the_date]')";
$client_number=$_GET['client_number'];
$client_name=$_GET['client_name'];
$client_age=$_GET['client_age'];
$client_phone=$_GET['client_phone'];
$client_address=$_GET['client_address'];
$the_date=$_GET['the_date'];
$sql="insert into client values ('$client_number','$client_name','$client_age','$client_phone','$client_address','$the_date')";

mysqli_query($conn,$sql);
if ($sql)
{
echo"تمت اضافه  ";
}

mysqli_close($conn);

?>