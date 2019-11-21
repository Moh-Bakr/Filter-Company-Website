
<html>
    
    <head>
        <title>search bage </title>
 <meta charset="utf_8">
    </head>
    <body bgcolor="gray">
        
    <marquee >  <font size="7" color="white"> <p> display a record </p></font></marquee><br><br><br>
    <hr size="10" color="red"><br>
    <center>
    <table border="1" cellpadding="1" cellspacing="1">
    	<tr>
    		<th>ID</th>
    		<th>Name</th>
    		<th>Age</th>
    		<th>Phone</th>
    		<th>Address</th>
    		<th>Date</th>
    	</tr>


<?php
include ('conection.php');
$client_number=$_GET['client_number'];
$sql="select * from client where client_number ='$client_number'";
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


    </table>
    </center>
    </form>  
    </body>
    
    
</html>






