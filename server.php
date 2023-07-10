<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$db_name = "php-dasar";

$db = new mysqli($hostname, $username, $password, $db_name);

if ($db->connect_error) {
    echo "error connections";
}
