<?php include "db.php";?>
<?php include "functions.php";?>

<?php include "includes/header.php" ?>

<div class="container">
    
    <div class="col-sm-6">

    <pre>
  <?php readRows(); ?>
     </pre>
     <div style="margin-top: 20px">
           <a href ="index.php"><button class="btn btn-primary">Main</button><a/> 
        </div>
    </div>



<?php include "includes/footer.php"?>