<?php
echo "hello";
include_once "../shared/cus-authguard.php";

$userid=$_SESSION['userid'];
$pid=$_GET['pid'];

include "../shared/conn.php";

$status=mysqli_query($conn,"insert into cart(userid,pid) values($userid,$pid)");
if($status)
{
    echo "Product Added to cart successfully!";    
          header("location:viewcart.php");
}
else
{
    echo "Unable to add to cart";
    echo mysqli_error($conn);
}

?>
