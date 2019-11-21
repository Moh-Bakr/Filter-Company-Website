 <!DOCTYPE html>
 <html>
 <head>
 	<title>Display</title>
 </head>
 <body>
<center>
 	<table border="1" cellpadding="1" cellspacing="1">
 		
<tr>
	<th>ID</th><br>
	<th>Name</th><br>
	<th>age</th><br>
	<th>phone</th><br>
	<th>address</th><br>
	<th>Date</th><br>
</tr>


 		<?php

 
 
include("conection.php");
$sql=" select * from client   ";


$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>".$row['client_number'] ."<br>";
echo "<td>".$row['client_name'] ."<br>";
echo "<td>".$row['client_age'] ."<br>";
echo "<td>".$row['client_phone'] ."<br>";
echo "<td>".$row['client_address'] ."<br>";
echo "<td>".$row['the_date'] ."<br>";

}




mysqli_close($conn);
?>
</center>
 	</table>
 
 </body>
 </html>
 