<?php
include('connectBO.php');

session_start();

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sqlDelete = "DELETE FROM books WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sqlDelete);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION["delete"] = "Book Deleted Successfully!";
        header("Location: indexBO.php");
        exit();
    } else {
        die("Error: " . mysqli_error($conn));
    }
} else {
    die("Invalid request.");
}
?>
