<?php

$pid=$_GET['pid'];

echo "Received id=$pid";

include_once "../shared/conn.php";

$status=mysqli_query($conn,"delete from products where pid=$pid");
if($status)
{
    echo "Product Deleted Successfully!";
    header("location:view.php");
}
else
{
    echo "Delete Failed";
    echo mysqli_error($conn);
}


?>