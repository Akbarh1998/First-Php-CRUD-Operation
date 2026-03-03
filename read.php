<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee List</title>
</head>

<body style="display: flex; justify-content: center; align-items: center; height:100vh;">
  <table border="1" cellpadding="8" style="width: 700px; background: #ddd; padding: 20px; font-size: 16px; border-collapse: collapse">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Role</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM employee";
      $result = $conn->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['address']}</td>
        <td>{$row['role']}</td>
        <td>
        <a href='update.php?id={$row['id']}'>Edit</a>
        <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
        </tr>
        
        ";
      }
      ?>
    </tbody>
  </table>
</body>

</html>