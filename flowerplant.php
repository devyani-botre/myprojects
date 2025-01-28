<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Plants</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: linear-gradient(to top, #c471f5 0%, #fa71cd 100%);
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

      .category-card details {
        margin-top: 10px;
        text-align: left;
      }
      .category-card button{
        text-decoration: none;
        color: white;
        background-color: #4CAF50;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 1rem;
        display: inline-block;
        margin-top: 10px;
      }
    </style>
</head>
<body style="background-color:black">
    <h1>Flower Plants</h1>
    <div class="categories-container">
        <?php
        $flowers = [
            [
                "name" => "Rose",
                "price" => '15/-',
                "image" => "rose1.jpg",
                "color" => "Red",
                "size" => "Medium",
                "species" => "Rosa"
            ],
            [
                "name" => "Tulip",
                "price" => '20/-',
                "image" => "tulip.jpg",
                "color" => "Various",
                "size" => "Medium",
                "species" => "Tulipa"
            ],
            [
                "name" => "Daffodil",
                "price" => '25/-',
                "image" => "diaffodil.jpg",
                "color" => "Yellow",
                "size" => "Medium",
                "species" => "Narcissus"
            ],
            [
                "name" => "Bogenvilla",
                "price" => '30/-',
                "image" => "bogenvilla.jpg",
                "color" => "",
                "size" => "Large",
                "species" => "Helianthus annuus"
            ],
            [
                "name" => "Lavender",
                "price" => '35/-',
                "image" => "lavender.jpg",
                "color" => "Purple",
                "size" => "Medium",
                "species" => "Lavandula"
            ],
            [
                "name" => "Orchid",
                "price" => '40/-',
                "image" => "orchid.jpg",
                "color" => "Various",
                "size" => "Medium",
                "species" => "Orchidaceae"
            ],
            [
                "name" => "Marigold",
                "price" => '10/-',
                "image" => "marigold.jpg",
                "color" => "Orange",
                "size" => "Medium",
                "species" => "Tagetes"
            ],
        ];

        foreach ($flowers as $flower) {
            echo "<div class='category-card'>
                <img src='{$flower['image']}' alt='{$flower['name']}' />
                <h3>{$flower['name']}</h3>
                <p>Price: {$flower['price']}</p>
                 <form action='buypg.php' method='POST'>
                <input type='hidden' name='plant_name' value='{$flower['name']}'>
                <input type='hidden' name='plant_price' value='{$flower['price']}'>
                <button type='Submit'>Buy</button>
                   </form>
            
                <details>
                    <summary>Details</summary>
                    <p>Color: {$flower['color']}</p>
                    <p>Size: {$flower['size']}</p>
                    <p>Species: {$flower['species']}</p>
                </details>
            </div>";
        }
        ?>
    </div>
</body>
</html>
