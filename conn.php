<?php
// establishing the MySQLi connection
$con= mysqli_connect("localhost","dentweb","webdent","dentweb");
if (!$con) {
    die('Connection Fail :'.mysqli_connect_error());
}
?>