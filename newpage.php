<?php

 include_once('connection.php') ?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <title>Document</title>
</head>

<body>
  <?php
  $data = "SELECT * FROM table1";
  $result = mysqli_query($conn, $data);
  ?>

  <div>
    <table>
      <thead>
        <tr>
          <th>User id</th>
          <th>Name</th>
          <th>Email</th>

        </tr>
      </thead>
      <?php
      if ($result) {
        foreach ($result as $row) {
      ?>
          <tbody>
            <tr id="trList">
              <td> <?php echo $row['uid']; ?> </td>
              <td id=<?php echo $row['uid']; ?>> <?php echo $row['name']; ?> </td>
              <td id=<?php echo $row['uid']; ?>> <?php echo $row['email']; ?> </td>
              <td><a href="handleCrud.php?updateId=<?php echo $row['uid']; ?>&name=<?php echo $row['name']; ?>&email=<?php echo $row['email']; ?>">
                  <button id=<?php echo $row['uid']; ?> class="aa" style="border:none; padding:5px 12px; border:none; border-radius:5px; color:white; background-color:blue;cursor:pointer;">Update</button></a></td>
              <td><a href="handleCrud.php?deleteId=<?php echo $row['uid']; ?>">
                  <button class="aa" style="border:none; padding:5px 12px; border:none; border-radius:5px; color:white; background-color:red;cursor:pointer;">Delete</button></a></td>
            </tr>
          </tbody>
      <?php
        }
      } else {
        echo "No record found";
      }
      ?>
    </table>
  </div>

</body>

</html>