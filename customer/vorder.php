<?php
include_once "../shared/cus-authguard.php";             
include "../shared/conn.php";
print_r($_POST);
$res=mysqli_query($conn,"select pid from products");
$row=mysqli_fetch_assoc($res);
$pid=$row['pid'];
echo "<div> product id is$pid</div>";

$mycheck=$_POST['mycheck'];
if(isset($_POST['mycheck']))
{
    $check1=$_POST['mycheck'];
    echo $check1;
    $status2=mysqli_query($conn,"insert into products(agree) values('$check1')");
    if($status2)
    {
        echo "registration 1 success";
    }
}
else{
    echo "registration failed ";
    echo mysqli_error($conn);

    

}


?>