




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student and Department Forms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 550px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
            border-radius: 8px;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }
        
        .container {
            max-width: 550px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
            border-radius: 8px;
            margin: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #333;
        }

        .table-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

   

    <div class="container">
        <h1>DEPARTMENT FORM</h1>
        <form action="" method="post">
            
            <label for="departmentName">Department Name:</label>
            <input type="text" id="departmentName" placeholder="Enter Department name" required autocomplete="off" name="departmentName">

            <label for="description">Description:</label>
            <textarea id="description" placeholder="Enter Department description" required name="description"></textarea>

            <input type="submit" value="Submit" class="btn" name="submit">
        </form>
    </div>

    

        <?php
        // Your PHP code for displaying student and department data goes here

        ?>

    </div>

</body>
</html>
