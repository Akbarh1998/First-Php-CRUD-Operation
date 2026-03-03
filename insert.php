<?php include 'db.php'; ?>

<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $role = $_POST['role'];

  $sql = "INSERT INTO employee (name, email, phone, address, role) values ('$name', '$email', '$phone', '$address', '$role')";
  if ($conn->query($sql) === TRUE);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Management</title>
</head>

<body style="display: flex; justify-content: center; align-items: center; height:100vh;">
  <form method="post" style="width: 500px; background: #ddd; padding: 20px; border-radius: 10px; font-size: 16px">
    <div style="margin: 10px;">
      <label for="name">Name</label>
      <br><br>
      <input type="text" name="name" style="border: 0; padding: 10px 5px; width: 100%;
      border-radius: 5px">
    </div>
    <div style="margin: 10px;">
      <label for="name">Email</label>
      <br><br>
      <input type="text" name="email" style="border: 0; padding: 10px 5px; width: 100%;
      border-radius: 5px">
    </div>
    <div style="margin: 10px;">
      <label for="name">Phone</label>
      <br><br>
      <input type="text" name="phone" style="border: 0; padding: 10px 5px; width: 100%;
      border-radius: 5px">
    </div>
    <div style="margin: 10px;">
      <label for="name">Address</label>
      <br><br>
      <input type="text" name="address" style="border: 0; padding: 10px 5px; width: 100%;
      border-radius: 5px">
    </div>
    <div style="margin: 10px;">
      <label for="name">Role</label>
      <br><br>
      <input type="text" name="role" style="border: 0; padding: 10px 5px; width: 100%;
      border-radius: 5px">
    </div>
    <button type="submit" name="submit" style="margin: 10px; border: 0; padding: 6px 20px; color: white; background: blue;border-radius: 5px">Add</button>
  </form>
</body>

</html>