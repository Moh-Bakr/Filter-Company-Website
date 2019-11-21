<?php

include ('../connect.php');

$sql="insert into services values('$_REQUEST[name]',
                                 '$_REQUEST[phone]',
                                 '$_REQUEST[address]',
                                 '$_REQUEST[date]',
                                 '$_REQUEST[problem]',
                                 '$_REQUEST[available]')";
//$result = $conn->query($sql);
                                 mysqli_query($conn,$sql);

                                 mysqli_close($conn);


?>