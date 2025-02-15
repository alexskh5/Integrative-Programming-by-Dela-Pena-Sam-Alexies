<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Weather Conditions</title>
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                height: 100vh;
                background: url('sunset.gif') no-repeat center center/cover;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                color: white;
                background-attachment: fixed;
            }
            .content {
                background-color: rgba(43, 44, 44, 0.7);
                padding: 30px;
                border-radius: 15px;
                font-size: 20px;
                line-height: 1.8;
                max-width: 600px;
                box-shadow: 0 4px 10px rgba(61, 59, 59, 0.5);
            }
            h1 {
                margin-bottom: 20px;
                font-size: 36px;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: #FFD700;
            }
            p {
                margin: 10px 0;
            }
        </style>
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
