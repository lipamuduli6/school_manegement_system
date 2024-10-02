<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .notification {
            background-color: #ff9999;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Weather Notification</h2>
        
        <?php
        // OpenWeatherMap API key
        $apiKey = 'YOUR_API_KEY';

        // City ID (you can find city ID from OpenWeatherMap API)
        $cityId = 'CITY_ID';

        // API URL
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?id=$cityId&appid=$apiKey";

        // Fetch weather data
        $weatherData = file_get_contents($apiUrl);
        $weatherData = json_decode($weatherData);

        // Check if data is fetched successfully
        if ($weatherData) {
            // Extract humidity percentage
            $humidity = $weatherData->main->humidity;

            // Check if humidity is below 70%
            if ($humidity < 70) {
                echo '<div class="notification">';
                echo "Humidity is below 70%: $humidity%";
                echo '</div>';
            } else {
                echo '<div class="notification">';
                echo "Humidity is normal: $humidity%";
                echo '</div>';
            }
        } else {
            echo '<div class="notification">';
            echo 'Failed to fetch weather data.';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
