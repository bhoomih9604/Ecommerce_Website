<?php

$uname=$_POST['username'];
$upass=$_POST['pass1'];

$cipher_text=md5($upass);

include_once "../shared/conn.php";

$status=mysqli_query($conn,"insert into proj(username,password,usertype) values('$uname','$cipher_text','admin')");
if($status)
{
    echo "Registration success";
}
else
{
    echo "Registartion Failed<br>";
    echo mysqli_error($conn);
}

?>