<?php
session_start(); // Start the session

// Initialize variables
$plant_name = "";
$plant_price = 0;
$quantity = 0;
$total_amount = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $plant_name = $_POST['plant_name'];
    $plant_price = (int)$_POST['plant_price'];

    // Store plant data in session variables
    $_SESSION['plant_name'] = $plant_name;
    $_SESSION['plant_price'] = $plant_price;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Buy Plant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            background-image: url('myp1.jpg');
            background-size: cover; /* Adjust this property as needed */
            background-repeat: no-repeat; /* Adjust this property as needed */
            background-position: center; /* Adjust this property as needed */
            margin: 0;
            padding: 0;
            justify-content: space-between;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.8);
        }

        h2 {
            text-align: center;
            color: #333333;
        }

        p {
            font-size: 16px;
            color: #555555;
            margin: 5px 0;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333333;
        }

        input[type="number"],
        textarea,
        input[type="email"],
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #6c63ff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #5a54e6;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .total {
            font-weight: bold;
            color: #333333;
            text-align: center;
        }
    </style>


    <script>
        function updateTotal() {
            const quantity = document.getElementById('quantity').value;
            const pricePerUnit = <?php echo $plant_price; ?>;
            const totalAmount = quantity * pricePerUnit;
            document.getElementById('total-amount').innerText = 'Rs. ' + totalAmount + '/-';
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Plant & Contact Details</h2>
        <p><strong>Plant Name:</strong> <?php echo htmlspecialchars($plant_name); ?></p>
        <p><strong>Price per unit:</strong> Rs. <?php echo htmlspecialchars($plant_price); ?>/-</p>
        <form action="payopt.php" method="POST">
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" oninput="updateTotal()" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" id="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile No:</label>
                <input type="text" name="mobile" id="mobile" required>
            </div>
            <div class="total">
                <p><strong>Total Amount:</strong> <span id="total-amount">Rs. 0/-</span></p>
            </div>
            <button type="submit">Proceed to Pay</button>
        </form>
    </div>
</body>
</html>
