<?php     
    $usern=$_GET['username'];
    $userp=$_GET['password'];
    setcookie("username", $usern, time() + 10, "/"); 
    if(isset($_COOKIE['username'])) {
        echo "Welcome back, " . $_COOKIE['username'] . "!";
    } else {
    echo "Hello, new visitor! Setting your cookie...";
    }
?>