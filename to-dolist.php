<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .todo-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        input[type="text"] {
            padding: 10px;
            width: calc(100% - 120px);
            border-radius: 5px 0 0 5px;
            border: 1px solid #ccc;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        li.completed {
            background-color: #f0f0f0;
            text-decoration: line-through;
        }

        a {
            text-decoration: none;
            color: #4CAF50;
            margin-left: 10px;
        }

        a:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
    <div class="todo-card">
        <h2>To-Do List</h2>

        <form method="post">
            <input type="text" name="task" placeholder="Enter Task">
            <button type="submit" name="addTask">Add Task</button>
        </form>

        <ul>
            <?php
            session_start();

           
            if (!isset($_SESSION['tasks'])) {
                $_SESSION['tasks'] = [];
            }

           
            if (isset($_POST['addTask']) && !empty($_POST['task'])) {
                $task = $_POST['task'];
                array_push($_SESSION['tasks'], ['task' => $task, 'completed' => false]);
            }

            
            if (isset($_GET['complete']) && isset($_SESSION['tasks'][$_GET['complete']])) {
                $_SESSION['tasks'][$_GET['complete']]['completed'] = true;
            }

           
            if (isset($_GET['delete']) && isset($_SESSION['tasks'][$_GET['delete']])) {
                unset($_SESSION['tasks'][$_GET['delete']]);
            }

           
            foreach ($_SESSION['tasks'] as $key => $task) {
                $taskText = $task['task'];
                if ($task['completed']) {
                    echo "<li class='completed'><s>$taskText</s> - Completed</li>";
                } else {
                    echo "<li>$taskText - <a href='?complete=$key'>Mark as Completed</a> | <a href='?delete=$key'>Delete</a></li>";
                }
            }
            ?>
        </ul>
    </div>
</body>
</html>
