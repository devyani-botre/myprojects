<?php
session_start(); // Start the session

// Retrieve data from session variables
$plant_name = isset($_SESSION['plant_name']) ? $_SESSION['plant_name'] : '';
$plant_price = isset($_SESSION['plant_price']) ? $_SESSION['plant_price'] : 0;
$quantity = isset($_SESSION['quantity']) ? $_SESSION['quantity'] : 0;
$address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$mobile = isset($_SESSION['mobile']) ? $_SESSION['mobile'] : '';
$total_amount = $quantity * $plant_price;

// Simulate payment process
$payment_success = true; // Simulated payment success

if ($payment_success) {
    // Send confirmation email
    $to = $email;
    $subject = "Order Confirmation";
    $message = "Thank you for your order!\n\n";
    $message .= "Order Details:\n";
    $message .= "Plant Name: $plant_name\n";
    $message .= "Quantity: $quantity\n";
    $message .= "Total Amount: Rs. $total_amount\n";
    $message .= "Delivery Address: $address\n";
    $message .= "Expected Delivery Time: within 2 days\n";
    $headers = "From: florent2@gmail.com";

    mail($to, $subject, $message, $headers);

    // Display order summary
    $order_summary = "
        <h2>Order Successful!</h2>
        <p>Thank you for your purchase. A confirmation email has been sent to $email.</p>
        <div class='order-summary'>
            <h3>Order Summary:</h3>
            <p><strong>Plant Name:</strong> $plant_name</p>
            <p><strong>Quantity:</strong> $quantity</p>
            <p><strong>Total Amount:</strong> Rs. $total_amount</p>
            <p><strong>Delivery Address:</strong> $address</p>
            <p><strong>Expected Delivery Time:</strong> within 2 days</p>
        </div>";

    // Database connection
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "florentdb";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    // SQL query to insert order details into the database
    $sql = "INSERT INTO `info_order` (`plant`, `price`, `quantity`, `total_amount`, `address`, `email`, `phone`, `dt`)
            VALUES ('$plant_name', $plant_price, $quantity, $total_amount, '$address', '$email', '$mobile', current_timestamp())";

    if ($conn->query($sql) === TRUE) {
        echo "Order successful";
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();
} else {
    $order_summary = "
        <h2>Payment Failed</h2>
        <p>There was an issue with your payment. Please try again.</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: plum;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.9);
            text-align: center;
            margin: 20px;
        }

        h2 {
            color: #333333;
        }

        p {
            font-size: 16px;
            color: #555555;
            margin: 5px 0;
        }

        .order-summary {
            text-align: left;
            margin-top: 20px;
        }

        .order-summary h3 {
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .order-summary p {
            margin: 5px 0;
        }

        .video-container {
            margin-top: 20px;
            text-align: center;
        }

        .thank-you {
            margin-top: 20px;
            font-size: 18px;
            color: red;
            padding: 10px;
            background-color: bisque;
            border: 2px solid #4CAF50;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php echo isset($order_summary) ? $order_summary : ''; ?>
    </div>

    <div class="video-container">
        <h3>Plantation Guide</h3>
        <video width="500" height="315" controls muted>
            <source src="plantationvideo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="thank-you">
        <p>Thank you for visiting Florent!</p>
    </div>
</body>
</html>
