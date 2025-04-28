<?php
session_start();
$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if ($username == "Rory" && $password == "password") {
    $_SESSION['user'] = $username;
    header("Location: welcome.php");
} else {
    echo "Invalid username or password. <a href=login.html>Try again</a>";
}
?>