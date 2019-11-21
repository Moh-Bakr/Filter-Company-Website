<?php include "db.php";?>
<?php include "functions.php" ?>
<?php createRows(); ?>

<?php include "includes/header.php" ?>

<div class="container">
    
    <div class="col-sm-6">
       <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="post">
            <div class="form-group">
            <label for="username">Name</label>
            <input type="text" name="name" class="form-control">
            </div>
            
             <div class="form-group">
                <label for="amount">Amount</label>
            <input type="text" name="amount" class="form-control">
            </div>
             <div class="form-group">
                <label for="Price">Price</label>
            <input type="text" name="price" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
            
        </form>
        <div style="margin-top: 20px">
           <a href ="index.php"><button class="btn btn-primary">Main</button><a/> 
        </div>
    </div>



<?php include "includes/footer.php"?>