<?php

$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "electronic practical training";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect");

}