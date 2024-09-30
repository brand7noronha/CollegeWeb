<?php
session_start();

//the isset() method checks if the particular element's value is set
// if (isset($_POST['login'])) {
if (!isset($_SESSION['username'])) {
    require("open_conn.php");
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $sql = "select * from user_credentials where username='$username' and password='$password';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "valid user";
        $_SESSION['username'] = $username;
    } else {
        echo "Invalid user";
    }
    require("close_conn.php");
} else {
    echo "welcome " . $_SESSION['username'];
    include("profile.php");
}
