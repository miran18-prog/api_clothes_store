<?php

include '../connection.php';

$userEmail = $_POST['user_email'];

$sqlQuery = "SELECT * FROM users_table WHERE user_email = '$userEmail'";

$result = $conn->query($sqlQuery);

if ($result->num_rows > 0) {
    //? if its true it means there is a user with that email and cannot create another account with that email
    echo json_encode(array("emailFound" => true));
} else {
    //? if its false it means there is not any users with that email and you can create an account with thath email
    echo json_encode(array("emailFound" => false));

}