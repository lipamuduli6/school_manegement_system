<?php
include('connectBO.php');

session_start();

if (isset($_POST["create"])) {
    $title = $_POST["title"];
    $type = $_POST["type"];
    $author = $_POST["author"];
    $description = $_POST["description"];

    $sqlInsert = "INSERT INTO books(title, author, type, description) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sqlInsert);

    mysqli_stmt_bind_param($stmt, "ssss", $title, $author, $type, $description);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION["create"] = "Book Added Successfully!";
        header("Location: indexBO.php");
        exit();
    } else {
        die("Error: " . mysqli_error($conn));
    }
}

if (isset($_POST["edit"])) {
    $title = $_POST["title"];
    $type = $_POST["type"];
    $author = $_POST["author"];
    $description = $_POST["description"];
    $id = $_POST["id"];

    $sqlUpdate = "UPDATE books SET title = ?, type = ?, author = ?, description = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sqlUpdate);

    mysqli_stmt_bind_param($stmt, "ssssi", $title, $type, $author, $description, $id);

    if (mysqli_stmt_execute($stmt)) {
        $_SESSION["update"] = "Book Updated Successfully!";
        header("Location: indexBO.php");
        exit();
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>
