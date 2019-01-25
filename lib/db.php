<?php 
$host = "localhost";
$user = "root";
$pass = "develop93";
$dbname = "dbhello";

$link = mysqli_connect($host,$user,$pass,$dbname);

// if($link){
//     echo '<div class="alert alert-success">
//                  <strong>Success!</strong> Connect to database
//            </div>';
// }
// else {
//     echo '<div class="alert alert-success">
//                  <strong>Success!</strong> Connect to database
//            </div>';
// }