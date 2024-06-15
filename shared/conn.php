<?php
$conn=new mysqli('localhost', 'root', 'bhoovi1612', 'ecom_proj');
if($conn->connect_error)
{
    echo "Connection failed";
}
?>