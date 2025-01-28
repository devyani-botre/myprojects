<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quantity = (int)$_POST['quantity'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $plant_price = isset($_SESSION['plant_price']) ? $_SESSION['plant_price'] : 0;
    $total_amount = $quantity * $plant_price;

    // Store contact details in session variables
    $_SESSION['quantity'] = $quantity;
    $_SESSION['address'] = $address;
    $_SESSION['email'] = $email;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['total_amount'] = $total_amount;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Payment Method</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="container">
        <h1>Select Payment Method</h1>
        <div class="payment-option">
            <a href="ord.php" class="bar-button">
                <img src="cashondel.jpg" alt="Cash on Delivery">
                Cash on Delivery
            </a>
        </div>
        <div class="payment-option">
            <a href="gpay.php" class="bar-button">
                <img src="googl.png" alt="Google Pay">
                Google Pay
            </a>
        </div>
        <div class="payment-option">
            <a href="netbnk.php" class="bar-button">
                <img src="netbnk.jpg" alt="Net Banking">
                Net Banking
            </a>
        </div>
        <div class="payment-option">
            <a href="credit.php" class="bar-button">
                <img src="cred.png" alt="Credit Card">
                Credit Card
            </a>
        </div>
    </div>
</body>
</html>
