<?php
include('connectBO.php');

session_start();

// Check if the form is submitted for updating
if (isset($_POST["edit"])) {
    $title = $_POST["title"];
    $type = $_POST["type"];
    $author = $_POST["author"];
    $description = $_POST["description"];
    $id = $_POST["id"];

    // Update the book in the database
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

// Fetch book details for the given ID
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Retrieve book details from the database
    $sqlSelect = "SELECT * FROM books WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sqlSelect);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $book = mysqli_fetch_assoc($result);

    if (!$book) {
        die("Book not found.");
    }
} else {
    die("Invalid request.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book - Your Website Title</title>
    <!-- Include your CSS stylesheets or external stylesheets here -->
</head>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        .form-element {
            margin-bottom: 15px;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
<body>

<div class="card">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
        
        <div class="form-element my-4">
            <input type="text" class="form-control" name="title" placeholder="Book Title" value="<?php echo $book['title']; ?>">
        </div>
        <div class="form-element my-4">
            <input type="text" class="form-control" name="author" placeholder="Author Name" value="<?php echo $book['author']; ?>">
        </div>
       <div class="form-element my-4">
            <select name="type" class="form-control">
                <option value="">Select Book Type</option>
                <option value="Adventure" <?php echo ($book['type'] == 'Adventure') ? 'selected' : ''; ?>>Adventure</option>
                <option value="Science" <?php echo ($book['type'] == 'Science') ? 'selected' : ''; ?>>Science</option>
                <option value="Chemistry" <?php echo ($book['type'] == 'Chemistry') ? 'selected' : ''; ?>>Chemistry</option>
                <option value="Horror" <?php echo ($book['type'] == 'Horror') ? 'selected' : ''; ?>>Horror</option>
            </select>
        </div>
        <div class="form-element my-4">
            <input type="text" class="form-control" name="description" placeholder="Book Description" value="<?php echo $book['description']; ?>">
        </div>
        <div class="form-element">
            <input type="submit" class="btn btn-success" name="edit" value="Update Book">
        </div>
    </form>
</div>

<!-- Include your JavaScript scripts or external scripts here -->

</body>
</html>
