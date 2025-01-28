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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter PIN - Google Pay</title>
    <link rel="stylesheet" href="style3.css">
    <script src="javasc.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Enter PIN for Google Pay</h1>
        <img src="googl.png" alt="Google Pay">
        <button id="get-pin-button" type="button">Get Verification PIN</button>
        <p id="pin-display" class="pin-display"></p>
        <form action="payment.php" method="post">
            <input type="hidden" name="payment_method" value="google_pay">
            <div class="pin-container">
                <input type="text" name="pin_digit_1" maxlength="1" required>
                <input type="text" name="pin_digit_2" maxlength="1" required>
                <input type="text" name="pin_digit_3" maxlength="1" required>
                <input type="text" name="pin_digit_4" maxlength="1" required>
               
            </div>
            <button type="submit">Submit PIN</button>
        </form>
    </div>
</body>
</html>
