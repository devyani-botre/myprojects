<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vines and Ornamental Plants</title>
    <style>
     body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%);
        text-align: center;
      }

      h1 {
        margin: 20px 0;
        color: white;
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
        overflow: hidden;
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

      .category-card p {
        margin: 10px 0;
        font-size: 1rem;
        color: #333;
      }

      .category-card button {
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

      .category-card details {
        margin-top: 10px;
        text-align: left;
      }
    </style>
</head>
<body style="background-color:black">
    <h1>Vines and Ornamental Plants</h1>
    <div class="categories-container">
        <?php
        $plants = [
            [
                "name" => "Money Plant",
                "price" => '20/-',
                "image" => "moneyplant.jpg",
                "color" => "green",
                "size" => "Medium",
                "species" => "Ipomoea"
            ],
            [
                "name" => "Honeysuckle",
                "price" => '25/-',
                "image" => "honeysuckle.jpg",
                "color" => "Orange white yellow",
                "size" => "Medium",
                "species" => "Lonicera"
            ],
            [
                "name" => "Ivy",
                "price" => '15/-',
                "image" => "ivy.jpg",
                "color" => "Green",
                "size" => "Small",
                "species" => "Hedera"
            ],
            
            [
                "name" => "Passiflora Incarnata ",
                "price" => '30/-',
                "image" => "krushna.jpg",
                "color" => "White violet",
                "size" => "Small",
                "species" => "Spathiphyllum"
            ],
            [
                "name" => "Cypress",
                "price" => '50/-',
                "image" => "cypress.jpg",
                "color" => "Green red",
                "size" => "Large",
                "species" => "Dypsis lutescens"
            ],
            [
                "name" => "Clivia",
                "price" => '35/-',
                "image" => "clivia.jpg",
                "color" => "green, orange",
                "size" => "Medium",
                "species" => "Codiaeum"
            ],
            [
                "name" => "Morning Glory",
                "price" => '40/-',
                "image" => "morningglory.jpg",
                "color" => "Green blue violet",
                "size" => "Medium",
                "species" => "Dracaena trifasciata"
            ],
        ];

        foreach ($plants as $plant) {
            echo "<div class='category-card'>
                <img src='{$plant['image']}' alt='{$plant['name']}' />
                <h3>{$plant['name']}</h3>
                <p>Price: {$plant['price']}</p>
                 <form action='buypg.php' method='POST'>
                <input type='hidden' name='plant_name' value='{$plant['name']}'>
                <input type='hidden' name='plant_price' value='{$plant['price']}'>
                <button type='Submit'>Buy</button>
                   </form>
            
                <details>
                    <summary>Details</summary>
                    <p>Color: {$plant['color']}</p>
                    <p>Size: {$plant['size']}</p>
                    <p>Species: {$plant['species']}</p>
                </details>
            </div>";
        }
        ?>
    </div>
</body>
</html>
