<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add New Book</title>
</head>
<style>
     body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa; /* Optional: Set background color */
        }

        .card {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 8px 8px 0 0;
        }

        form {
            margin-top: 20px;
        }

        .form-element {
            margin-bottom: 20px;
        }

        .form-control,
        select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }
</style>
<body>
    
  
    
<div class="card">
    <form action="process.php" method="post">
        <h3 class="mb-4">Add a New Book</h3>
        <div class="form-element my-4">
            <input type="text" class="form-control" name="title" placeholder="Book Title">
        </div>
        <div class="form-element my-4">
            <input type="text" class="form-control" name="author" placeholder="Author Name">
        </div>
        <div class="form-element my-4">
            <select name="type" class="form-control">
                <option value="">Select Book Type</option>
                <option value="Adventure">Adventure</option>
                <option value="Science">Science</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Horror">Horror</option>
            </select>
        </div>
        <div class="form-element my-4">
            <input type="text" class="form-control" name="description" placeholder="Book Description">
        </div>
        <div class="form-element">
            <input type="submit" class="btn btn-success" name="create" value="Add Book">
        </div>
    </form>
</div>

</body>
</html>



