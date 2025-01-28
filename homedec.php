<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Decor Plants</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: linear-gradient(-225deg, #A445B2 0%, #D41872 52%, #FF0066 100%);
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
    <h1>Home Decor Plants</h1>
    <div class="categories-container">
        <?php
        $plants = [
            [
                "name" => "Snake Plant",
                "price" => '20/-',
                "image" => "snakeplant.jpg",
                "color" => "Green",
                "height" => "2 feet",
                "species" => "Sansevieria trifasciata"
            ],
            [
                "name" => "Peace Lily",
                "price" => '25/-',
                "image" => "peacelily.jpg",
                "color" => "White",
                "height" => "1.5 feet",
                "species" => "Spathiphyllum"
            ],
            [
                "name" => "Fern",
                "price" => '15/-',
                "image" => "fern.jpg",
                "color" => "Green",
                "height" => "3 feet",
                "species" => "Pteridophyta"
            ],
            [
                "name"=>"palms tree",
                "price"=>'30/-',
                "image"=>"palmtree.jpg",
                "color"=>"Green",
                "height"=>"50 - 80 feet",
                "species"=>"oc",            
            ],
            [
                "name" => "croton",
                "price" => '15/-',
                "image" => "croton.jpg",
                "color" => "Green,yellow,orange",
                "height" => "3 - 6 feet",
                "species" => "codiaeum"
            ],
            [
              "name" => "ficus",
              "price" => '15/-',
              "image" => "Ficus.jpg",
              "color" => "Green",
              "height" => "3 - 6 feet",
              "species" => "epiphytes"
          ],
          [
            "name" => "Monstera",
            "price" => '15/-',
            "image" => "Monstera.jpg",
            "color" => "Green",
            "height" => "3 - 6 feet",
            "species" => "adansonii"
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
                    <p>Height: {$plant['height']}</p>
                    <p>Species: {$plant['species']}</p>
                </details>
            </div>";
        }
        ?>
    </div>
</body>
</html>
