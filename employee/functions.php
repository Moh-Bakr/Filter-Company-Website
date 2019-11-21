<?php include "db.php";?>
<?php


function createRows() {
if(isset($_POST['submit'])) {
global $connection;
$Name = $_POST['Name'];
$Amount = $_POST['Amount'];
$Price=  $_POST['Price'];  
    $query = "INSERT INTO users(Name,Amount,Price) ";
    $query .= "VALUES ('$Name', '$Amount','$Price')";
   $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    
    } else {
    echo "Record Create"; }}}


function readRows() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());}
        
while($row = mysqli_fetch_assoc($result)) {
        
        print_r($row);}  }



function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
        
    echo "<option value='$id'>$id</option>";}}


function UpdateTable() {
    if(isset($_POST['submit'])) {
    
global $connection;
$Name = $_POST['Name'];
$Amount = $_POST['Amount'];
$Price=  $_POST['Price']; 
$id = $_POST['id'];
    
$query = "UPDATE users SET ";
$query .= "Name = '$Name', ";
$query .= "Amount = '$Amount', ";
$query .= "Price = '$Price' ";
$query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Record Updated"; }}}


function deleteRows() {
    
    if(isset($_POST['submit'])) {
global $connection;
$Name = $_POST['Name'];
$Amount = $_POST['Amount'];
$Price=  $_POST['Price']; 
$id = $_POST['id'];
    
$query = "DELETE FROM users ";
$query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Record Deleted"; }}}



















    