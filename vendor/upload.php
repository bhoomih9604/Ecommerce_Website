
<?php

include "../shared/ven-authguard.php";

$userid=$_SESSION['userid'];

$file_name=$_FILES['pdtimg']['name'];
$file_path="../shared/images/".$file_name;

move_uploaded_file($_FILES['pdtimg']['tmp_name'],$file_path);


$name=$_POST['name'];
$price=$_POST['price'];
$detail=$_POST['detail'];

include_once "../shared/conn.php";

$status=mysqli_query($conn,"insert into products(name,price,detail,imgpath,uploaded_by) values('$name',$price,'$detail','$file_path',$userid)");
if($status)
{
    echo "Product Uploaded Successfully!";
    header("location:view.php");
}
else
{
    echo "Failed to Uplaod Product!<br>";
    echo mysqli_error($conn);
}


?>