<?php
session_start( );
$_SESSION['login_status']=false;

$uname=$_POST['username'];
$upass=$_POST['pass1'];

$login_cipher_text=md5($upass);
include_once"../shared/conn.php";

$query="select * from proj where username='$uname' and password='$login_cipher_text'";

$result=mysqli_query($conn,$query);

$row_count=mysqli_num_rows($result);
if($row_count==0)
{
    echo "Invalid credentials";
}
else
{
    
    $row=mysqli_fetch_assoc($result);

    $_SESSION['login_status']=true;

    $_SESSION['userid']=$row['userid'];
    $_SESSION['username']=$row['username'];
    $_SESSION['usertype']=$row['usertype'];
    
    if($row['usertype']=="admin")
    {
        header("location:../admin/admin1.php");
    }
    if($row['usertype']=="vendor")
    {
        header("location:../vendor/vhome.php");
    }
    else if($row['usertype']=="customer")
    {
        header("location:../customer/chome.php");
    }
   

}

?>