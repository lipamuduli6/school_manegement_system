<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Timing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .timer {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }
        .timer span {
            font-weight: bold;
            color: #e74c3c;
        }
        .message {
            font-size: 18px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Set exam start time and duration
        $examStartTime = strtotime("2024-02-27 03:00:00"); // Example start time (change as needed)
        $examDuration = 2 * 60 * 60; // 2 hours in seconds

        // Calculate exam end time
        $examEndTime = $examStartTime + $examDuration;

        // Get current time
        $currentTime = time();

        // Calculate remaining time
        $remainingTime = $examEndTime - $currentTime;

        // Display timer
        echo "<div class='timer'>Remaining time: <span>" . gmdate("H:i:s", $remainingTime) . "</span></div>";

        // Display message based on remaining time
        if ($currentTime < $examStartTime) {
            echo "<div class='message'>Exam has not started yet.</div>";
        } elseif ($currentTime >= $examStartTime && $currentTime <= $examEndTime) {
            echo "<div class='message'>You are currently taking the exam.</div>";
        } else {
            echo "<div class='message'>Exam has ended.</div>";
        }
        ?>
    </div>
</body>
</html>
