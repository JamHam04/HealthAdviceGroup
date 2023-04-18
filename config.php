<?php
define('USERNAME', 'root');
define('SERVER', 'localhost');
define('PASSWORD', '');
define('DATABASE', 'hag');

$conn = new PDO("mysql:host=".SERVER.";dbname=".DATABASE, USERNAME, PASSWORD);
?>

