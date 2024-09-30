<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
    include'config.php';

    $id=$_GET['deletedata'];
    $sql="delete from `register` where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location:registerdisp.php');
    }else{
           die(mysqli_error($con));


    }
?>


</body>

</html>
