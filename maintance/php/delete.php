<?php
include('connect.php');
$sql="delete from services where name='$_REQUEST[name]';";
mysqli_query($conn,$sql);



  ?>