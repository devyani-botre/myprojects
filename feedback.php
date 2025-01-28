<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Feedback</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #e0f7fa, #ffffff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 500px;
            background: #ffffff;
            padding: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #2b6777;
            font-size: 24px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        p {
            font-size: 14px;
            color: #555555;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 10px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333333;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            background: #f9f9f9;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #4caf50;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.2);
            outline: none;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        button {
            padding: 10px 15px;
            background: linear-gradient(90deg, #43a047, #66bb6a);
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background: linear-gradient(90deg, #388e3c, #4caf50);
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.95);
        }

        #success-message {
            display: none;
            margin-top: 15px;
            font-size: 14px;
            color: #4caf50;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 15px;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Help & Feedback</h1>
        <p>If you have any questions, need assistance, or want to provide feedback, please fill out the form below. We value your input and will respond as soon as possible.</p>
        <form id="feedbackForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Submit Feedback</button>
        </form>
        <div id="success-message">Feedback Submitted! Thank you for your Feedback.</div>
    </div>

    <script>
        // JavaScript to handle form submission
        const form = document.getElementById('feedbackForm');
        const successMessage = document.getElementById('success-message');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from refreshing the page
            successMessage.style.display = 'block'; // Show the success message
            form.reset(); // Clear the form inputs
        });
    </script>
</body>
</html>
