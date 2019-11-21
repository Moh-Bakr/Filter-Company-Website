<?php
include('../connect.php');
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
echo "<td><a href=del.php? name=".$row['name'].">delete</a></td>"."</br>";

}
mysqli_close($conn);


?>

