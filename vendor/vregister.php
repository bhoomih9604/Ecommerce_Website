<?php


$uname=$_POST['username'];
$upass=$_POST['pass1'];
$cipher_text=md5($upass);

include_once"../shared/conn.php";
$status=mysqli_query($conn,"insert into proj(username,password,usertype) values('$uname','$cipher_text','vendor')");
if ($status)
{
    //echo "registration success";
    $status1=mysqli_query($conn,"insert into venadmin(username) values('$uname')");
    if($status1)
    {
        echo "registration 1 success";
    }
}
else{
    echo "registration failed ";
    echo mysqli_error($conn);
}


?>


