<?php include 'db.php' ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM employee WHERE id= $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $role = $_POST['role'];


  $updatesql = "UPDATE employee SET name='$name', email='$email', phone='$phone', address='$address', role='$role' WHERE id=$id";
  $conn->query($updatesql);
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
      <input type="text" name="name" value="<?php echo $row['name'] ?>" style="border: 0; padding: 10px 5px; width: 100%;
      border-radius: 5px">
    </div>
    <div style="margin: 10px;">
      <label for="name">Email</label>
      <br><br>
      <input type="text" name="email" value="<?php echo $row['email'] ?>" style="border: 0; padding: 10px 5px; width: 100%;
      border-radius: 5px">
    </div>
    <div style="margin: 10px;">
      <label for="name">Phone</label>
      <br><br>
      <input type="text" name="phone" value="<?php echo $row['phone'] ?>" style="border: 0; padding: 10px 5px; width: 100%;
      border-radius: 5px">
    </div>
    <div style="margin: 10px;">
      <label for="name">Address</label>
      <br><br>
      <input type="text" name="address" value="<?php echo $row['address'] ?>" style="border: 0; padding: 10px 5px; width: 100%;
      border-radius: 5px">
    </div>
    <div style="margin: 10px;">
      <label for="name">Role</label>
      <br><br>
      <input type="text" name="role" value="<?php echo $row['role'] ?>" style="border: 0; padding: 10px 5px; width: 100%;
      border-radius: 5px">
    </div>
    <button type="submit" name="update" style="margin: 10px; border: 0; padding: 6px 20px; color: white; background: blue;border-radius: 5px">Update</button>
  </form>
</body>

</html>