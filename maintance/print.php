<!DOCTYPE html>
<html>
<head>
	<title>register page</title>
	<style type="text/css">
		div{
			position: relative;
			background:  #2F4F4F;
			
			font-style: bold;
			width: 22%;
			left:  29%;


		}
		.num{
			width: 33%;
			left: 29%;
		}
	</style>
</head>
<body style=" background: #778899"  >
	<center>
	<table border="1", cellpadding="1" cellspacing="1">
		
<tr>
	
<th>Name</th>
<th>phone</th>
<th>address</th>
<th>date</th>
<th>problem</th>
<th>worker</th>


</tr>
<?php
include('connect.php');
$sql = "select * from services";
$result=mysqli_query($conn,$sql);

while ($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['name']."</td>"."<br>";
echo "<td>".$row['phone']."</td>"."<br>";
echo "<td>".$row['address']."</td>"."<br>";
echo "<td>".$row['date']."</td>"."<br>";
echo "<td>".$row['problem']."</td>"."<br>";
echo "<td>".$row['available']."</td>"."<br>";
echo "<td><a href=test.php? name=".$row['name'].">delete</a></td>"."</br>";
echo "<td><a href=update.php? name=".$row['name'].">update</a></td>"."</br>";

}
mysqli_close($conn);


?>


	</table></center>
</body>
</html>