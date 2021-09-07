<?php

$host = '';
$user = '';
$pass = '';
$db_name = '';

$conn = new MySQLi($host, $user, $pass, $db_name);
$conn->set_charset("utf8");

if ($conn->connect_error) {
  die('Database baglanti hatasi.. ' . $conn->connect_error);
}
