<?php
require 'config/db.php';

// Fetch tasks from the database
$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$tasks = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do List</title>
  <link rel="stylesheet" href="style.css">


  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 400px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      display: flex;
      margin-bottom: 20px;
    }

    input[type="text"] {
      flex: 1;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      padding: 10px;
      font-size: 16px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #218838;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      padding: 10px;
      background-color: #f9f9f9;
      margin-bottom: 5px;
      border: 1px solid #ddd;
      display: flex;
      justify-content: space-between;
    }

    li a {
      text-decoration: none;
      color: #007bff;
    }

    li a:hover {
      text-decoration: underline;
    }

    .completed {
      text-decoration: line-through;
      color: #999;
    }
  </style>


</head>

<body>
  <div class="container">
    <h1>To-Do List</h1>

    <!-- Form to Add Task -->
    <form action="add-task.php" method="POST">
      <input type="text" name="task" placeholder="New task..." required>
      <button type="submit">Add Task</button>
    </form>

    <!-- Display Tasks -->
    <ul>
      <?php foreach ($tasks as $task): ?>
        <li>
          <span class="<?php echo $task['is_completed'] ? 'completed' : ''; ?>">
            <?php echo htmlspecialchars($task['task']); ?>
          </span>
          <a href="mark-complete.php?id=<?php echo $task['id']; ?>">Mark Complete</a>
          <a href="delete-task.php?id=<?php echo $task['id']; ?>">Delete</a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>

</html>