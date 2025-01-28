<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Search</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body style="background-color:#90EE90;">
    <h1>Search for a Plant</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $searchplant = strtolower(trim($_POST['search'])); // User input

        if (empty($searchplant)) {
            echo "<h2 style='color: red;'>Please enter a plant name to search.</h2>";
        } else {
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
              ], [
                "name" => "Rose",
                "price" => '15/-',
                "image" => "rose1.jpg",
                "color" => "Red",
                "height" => "Medium",
                "species" => "Rosa"
            ],
            [
                "name" => "Tulip",
                "price" => '20/-',
                "image" => "tulip.jpg",
                "color" => "Various",
                "height" => "Medium",
                "species" => "Tulipa"
            ],
            [
                "name" => "Daffodil",
                "price" => '25/-',
                "image" => "diaffodil.jpg",
                "color" => "Yellow",
                "height" => "Medium",
                "species" => "Narcissus"
            ],
            [
                "name" => "Bogenvilla",
                "price" => '30/-',
                "image" => "bogenvilla.jpg",
                "color" => "pink",
                "height" => "Large",
                "species" => "Helianthus annuus"
            ],
            [
                "name" => "Lavender",
                "price" => '35/-',
                "image" => "lavender.jpg",
                "color" => "Purple",
                "height" => "Medium",
                "species" => "Lavandula"
            ],
            [
                "name" => "Orchid",
                "price" => '40/-',
                "image" => "orchid.jpg",
                "color" => "Various",
                "height" => "Medium",
                "species" => "Orchidaceae"
            ],
            [
                "name" => "Marigold",
                "price" => '10/-',
                "image" => "marigold.jpg",
                "color" => "Orange",
                "height" => "Medium",
                "species" => "Tagetes"
            ], [
                "name" => "Apple",
                "price" => '30/-',
                "image" => "apple1.jpg",
                "color" => "Red",
                "height" => "Medium",
                "species" => "Malus domestica"
            ],
            [
                "name" => "Banana",
                "price" => '20/-',
                "image" => "Banana2.jpg",
                "color" => "Yellow",
                "height" => "Large",
                "species" => "Musa"
            ],
            [
                "name" => "Cherry",
                "price" => '50/-',
                "image" => "CherryPlant.jpg",
                "color" => "Red",
                "height" => "Small",
                "species" => "Prunus avium"
            ],
            [
                "name" => "Orange",
                "price" => '25/-',
                "image" => "orange.jpg",
                "color" => "Orange",
                "height" => "Medium",
                "species" => "Citrus sinensis"
            ],
            [
                "name" => "Strawberry",
                "price" => '40/-',
                "image" => "strawberry1.jpg",
                "color" => "Red",
                "height" => "Small",
                "species" => "Fragaria ananassa"
            ],
            [
                "name" => "Grapes",
                "price" => '35/-',
                "image" => "grapes1.jpg",
                "color" => "Green",
                "height" => "Small",
                "species" => "Vitis vinifera"
            ],
            [
                "name" => "Pineapple",
                "price" => '45/-',
                "image" => "pineapple.jpg",
                "color" => "Brown",
                "height" => "Large",
                "species" => "Ananas comosus"
            ],[
                "name" => "Money Plant",
                "price" => '20/-',
                "image" => "moneyplant.jpg",
                "color" => "green",
                "height" => "Medium",
                "species" => "Ipomoea"
            ],
            [
                "name" => "Honeysuckle",
                "price" => '25/-',
                "image" => "honeysuckle.jpg",
                "color" => "Orange white yellow",
                "height" => "Medium",
                "species" => "Lonicera"
            ],
            [
                "name" => "Ivy",
                "price" => '15/-',
                "image" => "ivy.jpg",
                "color" => "Green",
                "height" => "Small",
                "species" => "Hedera"
            ],
            
            [
                "name" => "Passiflora Incarnata ",
                "price" => '30/-',
                "image" => "krushna.jpg",
                "color" => "White violet",
                "height" => "Small",
                "species" => "Spathiphyllum"
            ],
            [
                "name" => "Cypress",
                "price" => '50/-',
                "image" => "cypress.jpg",
                "color" => "Green red",
                "height" => "Large",
                "species" => "Dypsis lutescens"
            ],
            [
                "name" => "Clivia",
                "price" => '35/-',
                "image" => "clivia.jpg",
                "color" => "green, orange",
                "height" => "Medium",
                "species" => "Codiaeum"
            ],
            [
                "name" => "Morning Glory",
                "price" => '40/-',
                "image" => "morningglory.jpg",
                "color" => "Green blue violet",
                "height" => "Medium",
                "species" => "Dracaena trifasciata"
            ],    [
                "name" => "Bonsai",
                "price" => '50/-',
                "image" => "bonsai.jpg",
                "color" => "Green",
                "height" => "Small",
                "species" => "Ficus"
            ],
            [
                "name" => "Succulent",
                "price" => '20/-',
                "image" => "succulent.jpg",
                "color" => "Green, Pink",
                "height" => "Small",
                "species" => "Sedum"
            ],
            [
                "name" => "Jade Plant",
                "price" => '25/-',
                "image" => "jade.jpg",
                "color" => "Green",
                "height" => "Small",
                "species" => "Crassula ovata"
            ],
            [
                "name" => "Cactus",
                "price" => '15/-',
                "image" => "cactus.jpg",
                "color" => "Green",
                "height" => "Small",
                "species" => "Cactaceae"
            ],
            [
                "name" => "Chinese Money Plant",
                "price" => '30/-',
                "image" => "chinesemoneyplant.jpg",
                "color" => "Green",
                "height" => "Small",
                "species" => "Pilea peperomioides"
            ],
            [
                "name" => "Aloe Vera",
                "price" => '25/-',
                "image" => "aloevera.jpg",
                "color" => "Green",
                "height" => "Medium",
                "species" => "Aloe barbadensis miller"
            ],
            [
                "name" => "Lucky Bamboo",
                "price" => '35/-',
                "image" => "luckybamboo.jpg",
                "color" => "Green",
                "height" => "Medium",
                "species" => "Polypodiopsida"
            ]
            ];

            $found = false; // Track if at least one plant is found

            foreach ($plants as $plant) {
                if (strpos(strtolower($plant['name']), $searchplant) !== false) {
                    echo "<div class='category-card'>
                        <img src='" . (file_exists($plant['image']) ? $plant['image'] : 'placeholder.jpg') . "' alt='{$plant['name']}' />
                        <h3>{$plant['name']}</h3>
                        <p><strong>Price:</strong> {$plant['price']}</p>
                        <form action='buypg.php' method='POST'>
                <input type='hidden' name='plant_name' value='{$plant['name']}'>
                <input type='hidden' name='plant_price' value='{$plant['price']}'>
                <button type='Submit'>Buy</button>
                   </form>
            
                        <details>
                            <summary>Details</summary>
                            <p><strong>Color:</strong> " . (!empty($plant['color']) ? $plant['color'] : 'Not specified') . "</p>
                            <p><strong>Height:</strong> " . (!empty($plant['height']) ? $plant['height'] : 'Not specified') . "</p>
                            <p><strong>Species:</strong> " . (!empty($plant['species']) ? $plant['species'] : 'Not specified') . "</p>
                             </summary>
                            </details>
                    </div>";
                    $found = true;
                }
            }

            if (!$found) {
                echo "<h2 style='color: red;'>No results found for '{$searchplant}'.</h2>";
            }
        }
    }
    ?>
</body>
</html>
