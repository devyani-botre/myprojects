<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Florent</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(86, 202, 107, 0.8); /* Dark transparent background */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
    max-width: 900px;
    background: rgba(255, 255, 255, 0.8); /* Light transparent background */
    padding: 30px;
    padding-top: 120px; /* Added padding to push content below the logo */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    margin: 20px;
    position: relative; /* For logo positioning */
}


        .logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 4.5cm; /* 4.5 cm for size */
            height: 4.5cm;
            border-radius: 50%;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1, h2 {
            color: #000000; /* Dark black text */
        }

        p, ul, li {
            font-size: 16px;
            color: #000000; /* Dark black text */
            line-height: 1.6;
        }

        ul {
            text-align: left;
            margin: 20px 0;
            padding: 0 20px;
        }

        li {
            margin-bottom: 10px;
        }

        .image-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .image-container img {
            width: 45%;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .image-container {
                flex-direction: column;
                align-items: center;
            }

            .image-container img {
                width: 80%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="lo.jpg" alt="Florent Logo"> <!-- Placeholder for the logo image -->
        </div>
        <center><h1>About Florent</h1></center>
        <p>
            Florent was founded with a singular mission: to bring nature closer to people's lives. Our journey began in 2010 with a small team of passionate horticulturists who dreamt of making high-quality plants and gardening resources accessible to everyone. Over the years, Florent has grown into a leading online plant nursery, known for its exceptional customer service and an extensive selection of plants and gardening tools.
        </p>
        <h2>Our Services</h2>
        <ul>
            <li>Wide variety of indoor and outdoor plants</li>
            <li>High-quality gardening tools and accessories</li>
            <li>Expert gardening tips and advice</li>
            <li>Personalized plant care services</li>
            <li>Fast and reliable delivery</li>
        </ul>
        <h2>Features of Our Plants</h2>
        <ul>
            <li>Extensive variety: From flowering plants to succulents and exotic species, we offer an impressive selection to suit all tastes and needs.</li>
            <li>Adaptability: Our plants are grown in various conditions to ensure they can thrive in different environments, making them perfect for both indoor and outdoor settings.</li>
            <li>Quality Assurance: Every plant undergoes rigorous quality checks to ensure it is healthy and free from pests and diseases.</li>
            <li>Eco-friendly Practices: We follow sustainable practices in our nurseries, ensuring minimal environmental impact.</li>
            <li>Customization: We offer bespoke plant arrangements and combinations to meet specific customer requirements and preferences.</li>
        </ul>
        <div class="image-container">
            <img src="polyhouse.jpg" alt="Our plant Nurcery">
            <img src="plantcare.jpg" alt="Staff care plants">
        </div>
        <p>
            At Florent, our mission is to promote green living and make gardening accessible and enjoyable for everyone. We are committed to providing you with the highest quality products and services to help you create the garden of your dreams. Join us in our journey to create a greener, healthier world. Whether you are looking to add a touch of greenery to your home or start a vegetable garden, Florent is here to help you every step of the way.
        </p>
    </div>
</body>
</html>
