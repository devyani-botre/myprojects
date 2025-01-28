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
    <title>Enter Bank Details - Net Banking</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="container">
        <h1>Net Banking Payment</h1>
        <img src="netbnk.jpg" alt="Net Banking" style="width:100px;height:auto;margin-bottom:20px;">
       
        <form action="payment.php" method="post">
            <div class="form-group">
                <label for="ifsc_code">Bank IFSC Code:</label>
                <input type="text" id="ifsc_code" name="ifsc_code" required>
            </div>
            <div class="form-group">
                <label for="branch_name">Bank Branch Name:</label>
                <input type="text" id="branch_name" name="branch_name" required>
            </div>
            <div class="form-group">
                <label for="user_pin">User PIN:</label>
                <input type="password" id="user_pin" name="user_pin" maxlength="6" required>
            </div>
            <input type="hidden" name="payment_method" value="net_banking">
            <button type="submit">Submit Payment</button>
        </form>
    </div>
</body>
</html>
