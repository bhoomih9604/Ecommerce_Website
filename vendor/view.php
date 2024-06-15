
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .card-text
        {
            height:40px;      
            overflow:hidden;      
        }
        .pdt-img
        {
            width:19rem;
            height:16rem;
        }
    </style>
</head>
<body>
    
        <script>
            function confirmDelete(pid)
            {
                res=confirm("Are you sure want to Delete?");
                if(res)
                {
                    window.location=`deleteproduct.php?pid=${pid}`;
                }
            }
        </script>
</body>
</html>
<?php
include_once "../shared/ven-authguard.php";
include "menu.html";

$userid=$_SESSION['userid'];
include_once "../shared/conn.php";

$result=mysqli_query($conn,"select * from products where uploaded_by=$userid");
echo "<div class='d-flex flex-wrap'>";
while($row=mysqli_fetch_assoc($result))
{
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $detail=$row['detail'];
    $imgpath=$row['imgpath'];

    echo "<div class='card' style='width: 19rem;'>
            <img class='pdt-img' src='$imgpath' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$name</h5>
                <h5 class='card-title text-danger'>$price Rs</h5>
                <p class='card-text'>$detail</p>
                <a onclick='confirmDelete($pid)' class='btn btn-danger'>Delete</a>
            </div>

</div>";


}
echo "</div>";



?>