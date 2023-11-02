<?php
include_once "connection.php";

if (isset($_POST["show"]) && $_POST["show"]=="Show"){
		$uid = $_POST["uid"];
    $read_query = "SELECT `uid`, `name`, `email` from table1 where `uid` = $uid";
    $result = mysqli_query($conn, $read_query);
    if (mysqli_num_rows($result) > 0){
				echo "<h1>User detials:</h1>";
        echo "<table>
                <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                </tr>";
        while($row = mysqli_fetch_assoc($result)){
					echo "<tr>";
					echo "<td>" . $row['uid'] . "</td>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td>" . $row['email'] . "</td>";
					echo "</tr>";
        }
				echo "</table>";
    } else {
        echo "No results";
    }

    mysqli_close($conn);
}