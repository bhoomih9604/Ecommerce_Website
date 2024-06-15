<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .menu
        {
            background-color: rgba(88, 223, 137, 0.66);
            display:flex;
            gap:15px;
            border: 10px;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
session_start();
if(!isset($_SESSION['login_status']))
{
    echo"Illegal attempt";
    die;
}
if($_SESSION['login_status']==false)
{
    echo"Illegal attempt1";
    die;
}

if($_SESSION['usertype']!='vendor')
{
    echo "Unathorized attempt";
    die;
}
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$usertype=$_SESSION['usertype'];
echo" <div class='menu center-block'>
<div>User ID:$userid</div> <br> <div>Username:$username</div> <br><div>Usertype:Legal Authority</div>
</div>";
?>