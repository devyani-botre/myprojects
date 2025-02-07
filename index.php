<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            background-image: url('wel1.jpg'); /* Replace with your image path */
            background-size: cover; /* Ensures the image covers the viewport without stretching */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents tiling */
            height: 100vh; /* Ensures the body is at least the height of the viewport */
            margin: 0; /* Removes default margin that can cause overflow */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centers content vertically */
            align-items: center; /* Centers content horizontally */
        }

        .login-section {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        .login-section h2 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 10px;
        }

        .login-section input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-section button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        .login-section button:hover {
            background-color: #45a049;
        }

        .success-message {
            text-align: center;
            margin-top: 20px;
            color: mediumvioletred;
            font-size: 1.8rem;
            font-weight: bold;
        }

        .explore-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: darkred;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2rem;
            font-weight:bold;
        }

        .explore-button:hover {
            background-color: #9400D3;
        }
    </style>
</head>
<body>
    <?php
    $showLoginBox = true; // Variable to control login box visibility

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $server = "localhost";
        $db_username = "root";
        $db_password = "";
        $database = "florentdb";

        // Create connection
        $conn = mysqli_connect($server, $db_username, $db_password, $database);

        // Check connection
        if (!$conn) {
            die("Connection to database failed: " . mysqli_connect_error());
        }

        // SQL query to insert login details into the database
        $sql = "INSERT INTO `info_login` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";

        if ($conn->query($sql) === TRUE) {
            $showLoginBox = false; // Hide the login box on successful login
            echo '<div class="success-message">Login Successful!</div>';
            echo '<a href="secpg.php" class="explore-button">Explore</a>';
        } else {
            echo '<div class="success-message">ERROR: ' . $conn->error . '</div>';
        }

        // Close connection
        $conn->close();
    }
    ?>

    <?php if ($showLoginBox): ?>
        <div class="login-section">
            <h2>Login</h2>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Login</button>
            </form>
        </div>
    <?php endif; ?>
</body>
</html>
