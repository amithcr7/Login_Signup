<?php

$dbhost = "sql6.freesqldatabase.com";
$dbuser = "sql6693905";
$dbpass = "w81VvLK8DG";
$dbname = "sql6693905"; 

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))  // Connect to database server(s)
{
    die("Could not connect to database");
}