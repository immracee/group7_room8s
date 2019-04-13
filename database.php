<?php
// $user = 'root';
// $pass = '';
$user = 'elena_test3';
$pass = 'test2019';
// $dsn = 'mysql:host=localhost; dbname=group7_roommates; charset=utf8mb4';
$dsn = 'mysql:host=elenarace.com; dbname=elena_test2; charset=utf8mb4';
// get pdo connection
try {
   $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
   $msg = $e->getMessage();
   echo $msg;
   exit();
}
?>
