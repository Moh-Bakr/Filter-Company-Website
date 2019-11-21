<?php
$servername ='localhost';
$username ='root';
$password ='';
$dbname ='is';

$conn=new mysqli($servername ,$username ,$password ,$dbname);
$conn->set_charset('utf8');
if(!$conn)
{
echo "error in connection";
}
?>