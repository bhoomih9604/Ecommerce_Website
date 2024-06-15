<?php
include_once "../shared/cus-authguard.php";
include "../shared/conn.php";

$result=mysqli_query($conn,"select * from cart join products on cart.pid=products.pid  where userid=$userid");

while($row=mysqli_fetch_assoc($result))
{
     $cartid=$row['cartid'];
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $detail=$row['detail'];
    $imgpath=$row['imgpath'];
    $uploaded_by=$row['uploaded_by'];

    $status=mysqli_query($conn,"insert into orders(userid,pid,name,price,detail,imgpath,uploaded_by) values($userid,$pid,'$name',$price,'$detail','$imgpath',$uploaded_by)");

    if($status)
    {
        echo "$name is added to Order Successfully!<br>";
    }
    else
    {
        echo "unsuccess";
        header("location:viewcart.php");
    }
}



?>