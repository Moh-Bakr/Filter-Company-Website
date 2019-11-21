<?php
$servername ='localhost';
$username ='root';
$password ='';
$dbname ='is';
$conn=mysqli_connect($servername ,$username ,$password ,$dbname);
$conn->set_charset('utf8');
if(!$conn)
{
	echo "Error in connection";
}
?>