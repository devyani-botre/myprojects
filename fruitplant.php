<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
    <style>
       body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
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
<body style="background-color:light green">
    <h1>Fruits Plants</h1>
    <div class="categories-container">
        <?php
        $fruits = [
            [
                "name" => "Apple",
                "price" => '30/-',
                "image" => "apple1.jpg",
                "color" => "Red",
                "size" => "Medium",
                "species" => "Malus domestica"
            ],
            [
                "name" => "Banana",
                "price" => '20/-',
                "image" => "Banana2.jpg",
                "color" => "Yellow",
                "size" => "Large",
                "species" => "Musa"
            ],
            [
                "name" => "Cherry",
                "price" => '50/-',
                "image" => "CherryPlant.jpg",
                "color" => "Red",
                "size" => "Small",
                "species" => "Prunus avium"
            ],
            [
                "name" => "Orange",
                "price" => '25/-',
                "image" => "orange.jpg",
                "color" => "Orange",
                "size" => "Medium",
                "species" => "Citrus sinensis"
            ],
            [
                "name" => "Strawberry",
                "price" => '40/-',
                "image" => "strawberry1.jpg",
                "color" => "Red",
                "size" => "Small",
                "species" => "Fragaria × ananassa"
            ],
            [
                "name" => "Grapes",
                "price" => '35/-',
                "image" => "grapes1.jpg",
                "color" => "Green",
                "size" => "Small",
                "species" => "Vitis vinifera"
            ],
            [
                "name" => "Pineapple",
                "price" => '45/-',
                "image" => "pineapple.jpg",
                "color" => "Brown",
                "size" => "Large",
                "species" => "Ananas comosus"
            ],
        ];

        foreach ($fruits as $fruit) {
            echo "<div class='category-card'>
                <img src='{$fruit['image']}' alt='{$fruit['name']}' />
                <h3>{$fruit['name']}</h3>
                <p>Price: {$fruit['price']}</p>
                 <form action='buypg.php' method='POST'>
                <input type='hidden' name='plant_name' value='{$fruit['name']}'>
                <input type='hidden' name='plant_price' value='{$fruit['price']}'>
                <button type='Submit'>Buy</button>
                   </form>
            
                <details>
                    <summary>Details</summary>
                    <p>Color: {$fruit['color']}</p>
                    <p>Size: {$fruit['size']}</p>
                    <p>Species: {$fruit['species']}</p>
                </details>
            </div>";
        }
        ?>
    </div>
</body>
</html>
