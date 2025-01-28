<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Categories</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: linear-gradient(to top, #e14fad 0%, #f9d423 100%);
        text-align: center;
      }

      .search-container {
        margin: 20px;
        display: flex;
        justify-content: center;
        gap: 10px;
      }

      .search-container input[type="text"] {
        width: 40%;
        padding: 10px;
        font-size: 1rem;
        border: 1px solid #ddd;
        border-radius: 5px;
      }

      h1 {
        margin: 20px 0;
        color: #333;
      }

      .categories-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
      }

      .category-card {
        background-color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 200px;
        text-align: center;
        padding: 20px;
        transition: transform 0.2s, box-shadow 0.2s;
      }

      .category-card img {
        width: 100%;
        border-radius: 10px;
        height: 150px;
        object-fit: cover;
      }

      .category-card h3 {
        margin: 15px 0;
        font-size: 1.2rem;
        color: #4CAF50;
      }

      .category-card a {
        text-decoration: none;
        color: white;
        background-color: #4CAF50;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 1rem;
        display: inline-block;
        margin-top: 10px;
      }

      .category-card a:hover {
        background-color: #45a049;
      }

      .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
      }

      .sidebar {
        height: 100vh;
        width: 200px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #4CAF50;
        padding-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
      }

      .sidebar a {
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        font-size: 1rem;
        color: white;
        display: block;
        width: 100%;
        cursor: pointer;
      }

      .sidebar a:hover {
        background-color: #45a049;
      }
    </style>
</head>
<body style="background-color: bisque;">
    <div class="sidebar">
        <a href="firstpg.php">Home</a>
        <a href="info.php">Information about Florent</a>
        <a href="guide.php">Plantation Guide</a>
        <a href="cancelord.php">Your Order History</a>
        <a href="policy.php">Return Product Policy</a>
        <a href="feedback.php">Help & Feedback</a>
        <a href="contact.html">Contact Details</a>
    </div>
    <div class="main-content" style="margin-left: 220px;">
        <form action="searchplant.php" method="POST">
            <div class="search-container">
                <input type="text" name="search" placeholder="Search for plants...">
                <button type="submit" style="background-color:green;color:white;">Search</button>
            </div>
        </form>
        <h1>Our Plant Categories</h1>
        <div class="categories-container">
            <!-- Category Cards -->
            <div class="category-card">
                <img src="homeplant.jpg" alt="Home Decor Plants" />
                <h3>Home Decor Plants</h3>
                <a href="homedec.php">Explore</a>
            </div>
            <div class="category-card">
                <img src="flower1.jpg" alt="Flowering Plants" />
                <h3>Flowering Plants</h3>
                <a href="flowerplant.php">Explore</a>
            </div>
            <div class="category-card">
                <img src="fruit.jpg" alt="Fruits Plants" />
                <h3>Fruits Plants</h3>
                <a href="fruitplant.php">Explore</a>
            </div>
            <div class="category-card">
                <img src="ornamentalplant.jpg" alt="Ornamentals & Vines" />
                <h3>Ornamentals & Vines</h3>
                <a href="veinplant.php">Explore</a>
            </div>
            <div class="category-card">
                <img src="table12.jpg" alt="Table Plants" />
                <h3>Table Plants</h3>
                <a href="tableplants.php">Explore</a>
            </div>
        </div>
    </div>
</body>
</html>
