<?php
session_start();

include("coniction.php"); 

$exitingNames = array();

    $sql = "SELECT * FROM companies";
    $reuls = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($reuls)){
    $exitingNames[] = $row['name'];
    $exitingNames[] = $row['The_Course'];
    }

    if (isset($_POST['search'])){
        $name =$_POST['search'];

        if (!empty($name)){
            foreach ($exitingNames as $exitingName) {
                if (strpos($exitingName, $name) !== false) {
                    echo $exitingName;
                    echo "</br>";
                }
            } 
        }
    }
