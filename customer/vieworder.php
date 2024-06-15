<?php
 

$conn=new mysqli("localhost","root","bhoovi1612","ecom_proj");
if($conn->connect_error)
{
    echo "Connection failed";
}
include_once "../shared/ven-authguard.php";
include "menu.html";

$userid=$_SESSION['userid'];
include_once "../shared/conn.php";

$result=mysqli_query($conn,"select * from products where uploaded_by=$userid");
echo "<div class='d-flex-row justify-content-evenly'>";
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
                <div class='card1'>Want reviews?
                <form action=' vorder.php' method='POST'onsubmit='return ischecked()'>
                
                <label>Mark as delivered!</label>
        <input type='checkbox' id='mycheck' name='mycheck' onclick='ischecked()'>
        
        <button name='sumbit'>submit</button>

</div>";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card1{
          height:fit-content;
          width:fit-content;
          background-color:pink;
        }
    </style>
</head>
<body>

    <script>
        demoobj=document.getElementById("demo");
        mesobj=document.getElementById("mess");
        function ischecked()
        {
            if(document.getElementById("mycheck").checked)
            {
               
               document.getElementById("message").textContent="checked";
               header(location:"vorder.php")
               
            }
            else{
                document.getElementById("message").textContent=" not checked";
               
            }

        }
        
        
    </script>
      
</div>
</form> 
    
</body>
</html>



