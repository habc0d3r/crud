<?php
include_once "connection.php";

// if(isset($_POST["update"]) && $_POST["update"] == "Update"){
//     $uid = $_POST['uid'];
//     $new_name = mysqli_real_escape_string($conn,$_POST['name']);
//     $new_email = mysqli_real_escape_string($conn,$_POST['email']);
//     $update_query = "UPDATE table1 SET `name`= '$new_name', `email`= '$new_email' where `uid`= '$uid'";
//     $result = mysqli_query($conn, $update_query);

//     if ($result) {
//         echo "Details updated successfully";
//     } else {
//         echo "Error updating details" . mysqli_error($conn);
//     }

//     mysqli_close($conn);
// }


if (isset($_POST['updateUser'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hidden = $_POST['hidden'];

    $query = "UPDATE table1 SET name ='$name', email = '$email' WHERE uid=$hidden";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        header("Location: ./");
    }
}
