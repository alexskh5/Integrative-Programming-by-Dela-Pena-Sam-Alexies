<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="largest_cities.css">
        <title>Largest Cities</title>
    </head>
    <body>
        <div class="container">
            <?php
                $Cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
                $CitiesCount = count($Cities);
            ?>

            <div class="cities-list">
                <h1>Largest cities in the world:</h1>
                <p class="horizontal-list">
                    <?php
                        for ($i = 0; $i < $CitiesCount; $i++) {
                            echo $Cities[$i];
                            if ($i < $CitiesCount - 1) {
                                echo ", ";
                            } else {
                                echo ".";
                            }
                        }
                    ?>
                </p>
            </div>

            <div class="vertical-container">
                <div class="vertical-section">
                    <h3>Sorted:</h3>
                    <ul>
                        <?php
                            sort($Cities);
                            for ($i = 0; $i < $CitiesCount; $i++) {
                                echo "<li>$Cities[$i]</li>";
                            }
                        ?>
                    </ul>
                </div>

                <div class="vertical-section">
                    <h3>With added cities:</h3>
                    <ul>
                        <?php
                            $newCities = array("Los Angeles", "Calcutta", "Osaka", "Beijing");
                            $Cities = array_merge($Cities, $newCities);
                            sort($Cities);
                            foreach ($Cities as $city) {
                                echo "<li>$city</li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
