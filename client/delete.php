<?php

include("conection.php");

$sql=" delete from client where client_number='$_REQUEST[client_number]'";


mysqli_query($conn,$sql);

if ($sql)
{

	echo "Record Deleted ";
}

mysqli_close($conn);



?>