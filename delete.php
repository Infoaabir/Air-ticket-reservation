<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
    include'config.php';

    $id=$_GET['deletedata'];
    $sql="delete from `flightdata` where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    }else{
           die(mysqli_error($con));


    }
?>


</body>

</html>
