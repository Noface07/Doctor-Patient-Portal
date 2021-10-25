<?php

$serverName ="localHost";
$dBUserName ="root";
$dBPassword ="";
$dBName ="doctor-patient-portal";

$conn = mysqli_connect($serverName,$dBUserName,$dBPassword,$dBName);


if (!$conn){
    
    die("Connection failed:" . mysqli_connect_error());
}