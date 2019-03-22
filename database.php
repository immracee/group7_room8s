<?php
$user = 'root';
$pass = '';
$dsn = 'mysql:host=localhost; dbname=group7_roommates; charset=utf8mb4';
// get pdo connection
try {
   $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
   $msg = $e->getMessage();
   echo $msg;
   exit();
}
?>
