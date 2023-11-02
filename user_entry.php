<?php
include_once 'connection.php';
if (isset($_POST["submit"]) && $_POST["submit"] == "Submit") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = $_POST['email'];

    $query = "INSERT into table1 (`name`, `email`) values ('$name', '$email')";
    $result = mysqli_query($conn, $query);

    if ($result == true) {
        header("Location: ./");
    } else {
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}
