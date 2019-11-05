<?php
$server="localhost";
$username="root";
$password="";
$conn=mysqli_connect($server,$username,$password);
if(!$conn){
    die("error parse". mysqli_connect_error);
}
echo "connect complete";
?>