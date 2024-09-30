<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
    include'config.php';

    $id=$_GET['deletedata'];
    $sql="DELETE FROM `frequent` WHERE id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location:displayffp.php');
    }else{
           die(mysqli_error($con));


    }
?>

<?php  
    createConfirmationmbox();  
?>  
</body>

</html>
