<?php
include 'header.inc';
session_start();
if (isset($_SESSION["user"])) {
    echo "Welcome, ".$_SESSION['user'];
} else {
    header("Location: login.html");
}
include 'footer.inc';
?>