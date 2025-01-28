<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(189, 106, 17);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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

        h1 {
            color: #333333;
        }

        p {
            font-size: 16px;
            color: #555555;
            margin: 5px 0;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333333;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            padding: 12px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Return Plant Order</h1>
        <form id="returnForm" action="" method="post" enctype="multipart/form-data" onsubmit="return showAlert()">
            <div class="form-group">
                <label for="order_number">Order Number:</label>
                <input type="text" id="order_number" name="order_number" placeholder="Enter Plant Order No." required>
            </div>
            <div class="form-group">
                <label for="description">Reason for Return:</label>
                <textarea id="description" name="description" rows="5" placeholder="Comment" required></textarea>
            </div>
            <div class="form-group">
                <label for="damage_image">If Plant is Damaged Upload Image of Plant:</label>
                <input type="file" id="damage_image" name="damage_image" accept="image/*">
            </div>
            <button type="submit">Submit Return Request</button>
        </form>
    </div>
    <script>
        function showAlert() {
            alert("Your Return Request is Successfully Accepted.");
            return true; // Proceed with form submission
        }
    </script>
</body>
</html>
