<?php
if (!defined('HOST')) {
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DB", "todo");
}
// Correct connection
$con = mysqli_connect(HOST, USER, PASS, DB);

// Check connection
if (!$con) {
    die("Connection Error: " . mysqli_connect_error());
}
?>
