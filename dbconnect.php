<?php 

define('DB_SERVER', '172.20.0.2');
define('DB_USER', 'root');
define('DB_PASS', 'admin');
define('DB_NAME', 'inventory');

// isi nama host, username mysql, dan password mysql anda
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

?>