<?php
include '../connection.php';

$userName = $_POST['user_name'];
$userEmail = $_POST['user_email'];
$userPassword = md5($_POST['user_password']);


$sqlQuery = "INSERT INTO users_table values(null,'$userName', '$userEmail', '$userPassword')";

$result = $conn->query($sqlQuery);

if ($result) {
    echo json_encode(array("accountCreated" => true));
} else {
    echo json_encode(array("accountCreated" => false));
}