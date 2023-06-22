<?php
include '../connection.php';

$userEmail = $_POST['user_email'];
$userPassword = md5($_POST['user_password']);

$sqlQuery = "SELECT * FROM users_table where user_email = '$userEmail' and user_password = '$userPassword'";

$result = $conn->query($sqlQuery);

$rec = array();

if ($result->num_rows > 0) {

    while ($rowFound = $result->fetch_assoc()) {
        $rec = $rowFound;
    }
    echo json_encode(
        array(
            "loggedIn" => true,
            "userData"=>$rec[0]
        ),
    );
} else {
    echo json_encode(array("loggedIn" => false));
}


print_r($rec)
?>