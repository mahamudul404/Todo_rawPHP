<?php
require 'config/db.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "UPDATE tasks SET is_completed = 1 WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $id]);

  header("Location: index.php");
  exit();
}
