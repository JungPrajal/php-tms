<?php

$server= "localhost";

$username="root";

$password="";

$dbname="tms";

// $con = new mysqli($server, $username, $password, $dbname);

$con= mysqli_connect($server, $username, $password, $dbname);

// if($con){
//     echo "database is connected successfully";
// }else{
//     echo "database connection failed";
// }

?>