<?php

$con = new mysqli('localhost', 'root', '', 'ordermanagement');
//$con = mysqli_connect("localhost", "root", "", "ordermanagement");

if(!$con) {
    die(mysqli_error($con));
}
?>