<?php
session_start();
$conn=new mysqli("localhost","root","","ecom_proj");
if($conn->connect_error)
{
    echo "Connection failed";
}
print_r($_POST);
$res=mysqli_query($conn,"select pid from products");
$row=mysqli_fetch_assoc($res);
$pid=$row['pid'];


$mycheck=$_POST['mycheck'];
if(isset($_POST['mycheck']))
{
    $check1=$_POST['mycheck'];
    echo $check1;
    $status2=mysqli_query($conn,"insert into products(agree) values('$check1')");
    if($status2)
    {
        echo "Marked read";
    }
}
else{
    echo "registration failed ";
    echo mysqli_error($conn);

    

}


?>



<?php
echo"A saturday fun is just about spending two times of the happiness"
?>