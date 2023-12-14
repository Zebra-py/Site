<?php

$servername = "site2";
$username = "root";
$password = "";
$dbname = "mainbd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    if ($row['password'] == $password) {
        $response = array('status' => 'success', 'message' => 'Авторизация успешна!');
    } else {
        $response = array('status' => 'error', 'message' => 'Неверные учетные данные');
    }
} else {
    $response = array('status' => 'error', 'message' => 'Пользователь не найден');
}

echo json_encode($response);

$conn->close();
?>