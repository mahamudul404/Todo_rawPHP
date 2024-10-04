<?php
require 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $task = $_POST['task'];

  $sql = "INSERT INTO tasks (task) VALUES (:task)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['task' => $task]);

  header("Location: index.php");
  exit();
}
