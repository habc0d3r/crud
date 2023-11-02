<?php
include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>

<body>
  <h1>CRUD Operation</h1>
  <!-- Create -->
  <h2>Enter User details:</h2>
  <form action="user_entry.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name">
    <br><br>
    <label for="email">Email</label>
    <input type="text" name="email">
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>


  <!-- <h2>Enter User ID to see the details:</h2>
    <form action="show_users.php" method="post" target="_blank">
      <label for="uid">User ID</label>
      <input type="text" name="uid"><br><br>
      <input type="submit" name="show" value="Show">
    </form>

    
    <h2>Enter User ID to Update the details:</h2>
    <form action="update_user.php" method="post">
      <label for="uid">User ID</label>
      <input type="text" name="uid"><br><br>
      <label for="new_name">New Name</label>
      <input type="text" name="name"><br><br>
      <label for="new_email">New Email</label>
      <input type="email" name="email"><br><br>
      <input type="submit" name="update" value="Update">
    </form>

   
    <h2>Enter User ID to Delete details:</h2>
    <form action="delete_user.php" method="post">
      User ID <input type="text" name="uid"><br><br>
      <input type="submit" name="delete" value="Delete">
    </form> -->

  <br>
  <br>
  <h1> The List of Users and details! </h1>
  <br>
  <?php include_once('newpage.php') ?>

</body>

</html>