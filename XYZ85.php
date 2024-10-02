<?php

// Function to check if the person's age is less than 2 years and trigger a notification
function checkAgeForNotification($age) {
    if ($age < 2) {
        // Send notification
        echo "Notification: The person's age is less than 2 years. This may require attention.";
        // You can modify this part to send an actual notification (e.g., email, notification, etc.)
    } else {
        echo "The person's age is 2 years or above.";
    }
}

// Example usage
$age = 1; // Change the age to test different scenarios
checkAgeForNotification($age);

?>


<?php

// Function to check if the person's age is 60 or above and trigger an alert
function checkAgeForAlert($age) {
    if ($age >= 60) {
        // Send alert
        echo "Alert: You have reached the age of 60 or above. Please consider retirement planning.";
        // You can modify this part to send an actual alert (e.g., email, notification, etc.)
    } else {
        echo "You are below 60 years of age.";
    }
}

// Example usage
$age = 59; // Change the age to test different scenarios
checkAgeForAlert($age);

?>

<?php

// Get the current day of the week
$day_of_week = date('w');

// Convert numeric representation to text
$days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$current_day = $days[$day_of_week];

// Display the current day
echo "Today is " . $current_day;

?>
<?php

// Define special occasions with their dates
$special_occasions = array(
    'New Year' => '2024-01-01',
    'Independence Day' => '2024-07-04',
    // Add more occasions as needed
);

// Get the current date
$current_date = date('Y-m-d');

// Get the current time
$current_time = date('H:i:s');

// Display the current date and time
echo "Current Date: $current_date<br>";
echo "Current Time: $current_time<br>";

// Check if today is a special occasion
foreach ($special_occasions as $occasion => $date) {
    if ($current_date === $date) {
        echo "<script>alert('Happy $occasion!');</script>";
    }
}

?>
