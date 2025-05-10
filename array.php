<?php
    $names = array("Alfaj","Atharv","Raj","Sourabh","Piyush");
    foreach ($names as $elements)  {
        echo $elements."<br>";
    }

    echo "<br>";
    $records = array("Manager"=>"XYz","Developer"=>"Alfaj","HR"=>"WWW");
    echo $records["Manager"];

    echo "<br>";
    $multi = array(
        array("name"=>"Alfaj","rollno"=>"13"),
        array("name"=>"Atharv","rollno"=>"09"),
        array("name"=>"Sourabh","rollno"=>"10")
    );

    echo $multi[0]["name"];
    echo $multi[0]["rollno"];
    echo "<br>";
?>  