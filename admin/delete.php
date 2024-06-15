<?php
include_once "../shared/authguard.php";
include "../shared/conn.php";
$userid=$_GET['userid'];
$usertype=$_GET['usertype'];

if($usertype=="vendor")
{
    $status=mysqli_query($conn1,"delete from  venadmin where userid=$userid");
    if($status)
    { echo " removed successfully!!"; 
    header("location:admin1.php");}
    else
    {echo "Error in removing the cart Item!";
    echo mysqli_error($conn1);}
}
else if($usertype=="customer")
{
    $status=mysqli_query($conn1,"delete from cusadmin where userid=$userid");
    if($status)
    {
        echo " removed successfully!!"; 
        header("location:admin1.php"); 
    }
    else
    {
        echo "Error in removing the cart Item!";
        echo mysqli_error($conn1);
    }
}
$status=mysqli_query($conn,"delete from cart where cartid=$cartid");
if($status)
{
    echo "Item removed from Cart successfully!!";
    header("location:viewcart.php");
}
else
{
    echo "Error in removing the cart Item!";
    echo mysqli_error($conn);
}


?>


