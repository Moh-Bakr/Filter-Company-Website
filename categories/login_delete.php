<?php include "db.php";?>
<?php include "functions.php";?>

<?php deleteRows(); ?>

<?php include "includes/header.php" ?>

<div class="container">
    
    <div class="col-sm-6">
        <h2 class="text-center">Delete</h2>
     <form action="login_delete.php" method="post">
            <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="Name" class="form-control">
            </div>
            
             <div class="form-group">
                <label for="amount">Amount</label>
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
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
        <div style="margin-top: 20px">
           <a href ="index.php"><button class="btn btn-primary">Main</button><a/> 
        </div>
    </div>
<?php include "includes/footer.php"?>