<?php
include_once('connection.php');

if (isset($_GET['updateId'])) {
  $updateId = $_GET['updateId'];
  $name = $_GET['name'];
  $email = $_GET['email'];
?>

  <form action="update_user.php" method="POST">

    <label for="new_name">New Name</label>
    <input type="text" name="name" value=<?php echo $name; ?>><br><br>
    <label for="new_email">New Email</label>
    <input type="email" name="email" value=<?php echo $email; ?>><br><br>
    <input type="hidden" name="hidden" value=<?php echo $updateId; ?>>
    <input type="submit" name="updateUser" value="Update">
  </form>

<?php
}

if (isset($_GET['deleteId'])) {
  $id = $_GET['deleteId'];

  $query = "DELETE FROM table1 WHERE uid ='$id'";
  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    header("Location: ./");
  }
}
