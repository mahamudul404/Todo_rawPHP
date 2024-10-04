<?php 

$host = 'localhost';
$dbname = 'todo_PHP';
$username = 'root';
$password = '';


try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('could not connect :'. $e->getMessage());
}

