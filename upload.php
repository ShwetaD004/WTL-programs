<?php
    //THIS FILE IS PART OF FILE.HTML
    session_start();

    $_SESSION['fname'] = $_FILES['fileToUpload']['name'];
    $_SESSION['uname'] = $_POST['uname'];

    echo "Session ID = " . session_id() . "<br>";

    $target = "uploads/";

    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target . $_FILES['fileToUpload']['name'])) {
        echo "File Uploaded Successfully.";
        echo '<br><a href="info.php">View Info</a>';
    } else {
        echo "File Not Uploaded.";
    }

?>
