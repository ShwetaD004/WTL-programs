<?php
    // THIS FILE IS PART OF UPLOAD.PHP and FILE.HTML
    session_start();
    echo "Session ID = " . session_id() . "<br>";
    echo "File Name : " . $_SESSION['fname'] . "<br>";
    echo "User Name : " . $_SESSION['uname'] . "<br>";
?>