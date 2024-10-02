<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SweetAlert Example with PHP</title>
  <!-- Include SweetAlert library from CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>

<?php
// Check if a condition is met, for example, a form submission
if (isset($_POST['submit'])) {
    // Your PHP logic here
    
    // For demonstration, let's assume a success condition
    $success = true;

    // Display SweetAlert based on the PHP condition
    echo "<script>";
    if ($success) {
        echo "Swal.fire({
                title: 'Success!',
                text: 'Your action was successful.',
                icon: 'success',
                confirmButtonText: 'OK'
            });";
    } else {
        echo "Swal.fire({
                title: 'Error!',
                text: 'There was an error in your action.',
                icon: 'error',
                confirmButtonText: 'OK'
            });";
    }
    echo "</script>";
}
?>

<form method="post" action="display12.php">
  <!-- Your form elements go here -->
  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
