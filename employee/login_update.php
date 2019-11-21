<?php include "db.php";?>
<?php include "functions.php";?>
<?php UpdateTable();?>
<?php include "includes/header.php" ?>
<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
     <form action="login_update.php" method="post">
            <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="Name" class="form-control">
            </div>
             <div class="form-group">
                <label for="password">Amount</label>
            <input type="text" name="Amount" class="form-control">
            </div>
             <div class="form-group">
                <label for="Price">Price</label>
            <input type="text" name="Price" class="form-control">
            </div>
             <div class="form-group">
             <select name="id" id="">
                <?php 
                showAllData();
                  ?>
             </select>
             </div>
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
        </form>
    <div style="margin-top: 20px">
           <a href ="index.php"><button class="btn btn-primary">Main</button><a/> 
    </div>
    </div>
<?php include "includes/footer.php"?>