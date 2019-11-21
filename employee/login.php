<?php 

if(isset($_POST['submit'])) {
   
$Name = $_POST['Name'];
$Amount = $_POST['Amount'];
$Price=  $_POST['Price']; 
    
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');    
    
    if($connection) {
    
    echo "We are connected";} 
    else {
    die("Database connection failed");}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="Name" class="form-control">
            </div>
            
             <div class="form-group">
                <label for="Amount">Amount</label>
            <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="Price">Price</label>
            <input type="text" name="Price" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">  
        </form>
    </div>
</div>
</body>
</html>