<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .auth-parent
        {
            display:flex;
            justify-content:space-around;
            background-color:yellow;
            height:30px;
        }
        .box{
         border:5px;
         margin:5px;
         padding:5px;
         font-weight:bolder;
         border-radius:25px black;
         width:fit-content;
         height:fit-content;
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
        echo "Illegal attempt";
        die;
    }
    if($_SESSION['login_status']==false)
    {
        echo "Login Failed; Unauthorised Attempt";
        die;
    }
    if($_SESSION['usertype']!='customer')
    {
        echo "Unauthorized USER Type";
        die;
    }

    $userid=$_SESSION['userid'];
    $username=$_SESSION['username'];
    $usertype=$_SESSION['usertype'];
    echo "<div class='auth-parent'>
        <div class='box'> User id:$userid</div>
        <div class='box'> Username:$username</div>
        <div class='box'> Usertype:$usertype</div>
    </div>";

?>