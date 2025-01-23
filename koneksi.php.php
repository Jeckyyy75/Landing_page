<?php

$host = "locahost";

$username = "root";

$password = "";

$database = "praktek_06_019";

$conn = new mysqli[$host, $username, $password, $database];

if [$conn->connect_error] {
    die["koneksi gagal:" .$conn->connect_error];
}

?>