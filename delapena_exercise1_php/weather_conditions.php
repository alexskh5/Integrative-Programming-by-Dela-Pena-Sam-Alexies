<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="weather_conditions.css">
        <title>Weather Conditions</title>
    </head>
    <body>
        <div class="content">
            <h1>Weather Conditions</h1>
            <?php 
                $WeatherValues = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
                echo "<p>We've seen all kinds of weather this month.</p>"; 
                echo "<p>At the beginning of the month, we had {$WeatherValues[5]} and {$WeatherValues[6]}.</p>";
                echo "<p>Then came {$WeatherValues[1]} with a few {$WeatherValues[2]} and some {$WeatherValues[0]}.</p>";
                echo "<p>At least we didn't get any {$WeatherValues[3]} or {$WeatherValues[4]}.</p>";
            ?>
        </div>
    </body>
</html>
