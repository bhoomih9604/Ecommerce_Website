<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <style>
    .font
    {
        font-size: 40px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        color: black;
        text-align:center;
    }
    .font1
    {
        font-size: 20px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        color: black;
        text-align:center;
    }
    .bg
    {
        color: beige;
    }
    .bg1
    {
    text-align: center;
    justify-content: center;
    display: flex;
    }
    .srcoll{
        overflow: scroll;
        height:100px;
    }
    .thead
    {       
     position:sticky;
     
    }
    
   </style>
</head>
<body>

 <div class="font"> Admin Page..! </div>
</body>
</html>

<?php
$conn1=new mysqli("localhost","root","","ecom_proj");
if($conn1->connect_error)
{
    echo "Error in Connection";
    die;
}
$sql_result=mysqli_query($conn1,"select * from cusadmin");
echo "<div class='font1'>Customers</div>";
echo " <table  class='table' border='2' cellpadding='10' margin-'2' >
<thead>
    <tr>
        <th>Userid</th>
        <th>Username</th>
        
        <th>Created_date</th>
        <th>Remove</th>
        
    </tr>
</thead>
<tbody>";
while($row=mysqli_fetch_assoc($sql_result))
{
    $userid=$row['userid'];
    $username=$row['username'];
    $usertype=$row['usertype'];
    $created_date=$row['created_date'];
    echo "<tr>
    <td>$userid</td>
    <td>$username</td>
    <td>$created_date</td>
    <td>
    <a href='delete.php?userid=$userid&usertype=$usertype' class='btn btn-warning'>Delete</a>
    </td>
</tr>";
}
echo'</tbody>
</table>';

echo "<div class='font1'>Vendors</div>";
$sql_result=mysqli_query($conn1,"select * from venadmin");

echo " <table class='table' border='2'cellpadding='10' >
<thead>
    <tr>
        <th>Userid</th>
        <th>Username</th>
        <th>Created date</th>
        <th>Remove</th>
    </tr>
</thead>
<tbody>";
while($row=mysqli_fetch_assoc($sql_result))
{
    $userid=$row['userid'];
    $username=$row['username'];
    $created_date=$row['created_date'];

    echo "<tr>
    <td>$userid</td>
    <td>$username</td>
    <td>$created_date</td>
    <td>
        <button>delete</button>
    </td>
</tr>";
}
echo'</tbody>
</table>'

?>