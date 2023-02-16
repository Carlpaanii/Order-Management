<?php

include "connect.php";

extract($_POST);

//if (isset($_POST[''])) {
// $nameSend = $_POST['completename'];
// $roofprofileSend = $_POST['completeroofprofile'];
// $roofmaterialSend = $_POST['completeroofmaterials'];
// $colorSend = $_POST['completecolors'];
// $weightSend = $_POST['completeweight'];
// $thicknessSend = $_POST['completethickness'];
// $remarksSend = $_POST['completeremarks'];

if(isset($_POST['nameSend']) && (isset($_POST['roofprofileSend']) && (isset($_POST['roofmaterialSend']) && (isset($_POST['colorSend']) && (isset($_POST['weightSend']) && (isset($_POST['thicknessSend']) && (isset($_POST['remarksSend']))



$sql = "INSERT INTO CRUD (customer, profile, material, thickness, color, weight, remarks)
VALUES ('$nameSend','$roofprofileSend','$roofmaterialSend','$colorSend', '$weightSend', $thicknessSend,'$remarksSend')";

$result = mysqli_query($con, $sql) or die(mysqli_error($con));


?>