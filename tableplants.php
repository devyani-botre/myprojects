<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Plants</title>
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
    <h1>Table Plants</h1>
    <div class="categories-container">
        <?php
        $table_plants = [
            [
                "name" => "Bonsai",
                "price" => '50/-',
                "image" => "bonsai.jpg",
                "color" => "Green",
                "size" => "Small",
                "species" => "Ficus"
            ],
            [
                "name" => "Succulent",
                "price" => '20/-',
                "image" => "succulent.jpg",
                "color" => "Green, Pink",
                "size" => "Small",
                "species" => "Sedum"
            ],
            [
                "name" => "Jade Plant",
                "price" => '25/-',
                "image" => "jade.jpg",
                "color" => "Green",
                "size" => "Small",
                "species" => "Crassula ovata"
            ],
            [
                "name" => "Cactus",
                "price" => '15/-',
                "image" => "cactus.jpg",
                "color" => "Green",
                "size" => "Small",
                "species" => "Cactaceae"
            ],
            [
                "name" => "Chinese Money Plant",
                "price" => '30/-',
                "image" => "chinesemoneyplant.jpg",
                "color" => "Green",
                "size" => "Small",
                "species" => "Pilea peperomioides"
            ],
            [
                "name" => "Aloe Vera",
                "price" => '25/-',
                "image" => "aloevera.jpg",
                "color" => "Green",
                "size" => "Medium",
                "species" => "Aloe barbadensis miller"
            ],
            [
                "name" => "Lucky Bamboo",
                "price" => '35/-',
                "image" => "luckybamboo.jpg",
                "color" => "Green",
                "size" => "Medium",
                "species" => "Polypodiopsida"
            ],
        ];

        foreach ($table_plants as $plant) {
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
