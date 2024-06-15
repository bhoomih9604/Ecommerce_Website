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
    if($_SESSION['usertype']!='admin')
    {
        echo "Unauthorized USER Type";
        die;
    }
    
    $userid=$_SESSION['userid'];
    $username=$_SESSION['username'];
    $usertype=$_SESSION['usertype'];
    echo "<div class='auth-parent'>
        <div class='box'> Id:$userid</div>
        <div class='box'> Username:$username</div>
        
    </div>";

?>