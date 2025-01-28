<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter PIN</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="container">
        <h1>Payment Confirmation</h1>
        <div class="selected-payment">
            <?php
            // Determine the payment method from query parameter
            $paymentMethod = isset($_GET['payment_method']) ? $_GET['payment_method'] : null;

            // Initialize default values
            $paymentLogo = '';
            $paymentMethodText = '';

            // Set logo and text based on payment method
            switch ($paymentMethod) {
                case 'cash_on_delivery':
                    $paymentLogo = 'cashondel.jpg';
                    $paymentMethodText = 'Cash on Delivery';
                    break;
                case 'google_pay':
                    $paymentLogo = 'googl.png';
                    $paymentMethodText = 'Google Pay';
                    break;
                case 'net_banking':
                    $paymentLogo = 'netbnk.jpg';
                    $paymentMethodText = 'Net Banking';
                    break;
                case 'credit_card':
                    $paymentLogo = 'cred.png';
                    $paymentMethodText = 'Credit Card';
                    break;
                default:
                    $paymentLogo = 'default.png';
                    $paymentMethodText = 'Unknown Payment Method';
                    break;
            }
            ?>
            <!-- Display the logo and payment method -->
            <img id="payment-logo" src="<?php echo htmlspecialchars($paymentLogo); ?>" alt="Selected Payment Logo" />
            <p id="payment-method-text"><?php echo htmlspecialchars($paymentMethodText); ?></p>
        </div>
        <form action="xyz.php" method="post">
            <div class="pin-entry">
                <input type="password" name="pin1" maxlength="1" required>
                <input type="password" name="pin2" maxlength="1" required>
                <input type="password" name="pin3" maxlength="1" required>
                <input type="password" name="pin4" maxlength="1" required>
                <input type="password" name="pin5" maxlength="1" required>
                <input type="password" name="pin6" maxlength="1" required>
            </div>
            <button type="submit">Done</button>
        </form>
    </div>
</body>
</html>
