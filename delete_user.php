<?php
include_once "connection.php";

if (isset($_POST["delete"]) && $_POST["delete"] == "Delete") {
    $uid = mysqli_real_escape_string($conn, $_POST["uid"]);
    $delete_query = "DELETE FROM table1 where `uid`= $uid";
    $result = mysqli_query($conn, $delete_query);

    if ($result) {
        echo "User details deleted!";
    } else {
        echo "Deletion failed! " . mysqli_error($conn); 
    }

    mysqli_close($conn);
}
?>