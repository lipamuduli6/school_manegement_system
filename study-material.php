<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }

        .question {
            margin-bottom: 20px;
        }

        .options {
            margin-top: 10px;
        }

        .option-btn {
            display: block;
            margin-top: 5px;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .option-btn:hover {
            background-color: #45a049;
        }

        .active {
            background-color: #45a049;
        }

        .submit-btn {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <header>
        <h1>Online Exam</h1>
    </header>

    <div class="container">

<?php
// Sample questions (in a real-world scenario, you would fetch questions from a database)
$questions = [
   
    [
        'question' => '1.What is the capital of France?',
        'options' => ['Berlin', 'Madrid', 'Paris', 'Rome'],
        'correct_option' => 'Paris',
    ],
    [
        'question' => '2.Which planet is known as the Red Planet?',
        'options' => ['Mars', 'Venus', 'Jupiter', 'Saturn'],
        'correct_option' => 'Mars',
    ],
    [
        'question' => '3.The Milky Way is classified as?',
        'options' => ['spiral Galaxy', 'electrical Galaxy', 'Irregular Galaxy', 'rouns Galaxy'],
        'correct_option' => 'Sprial Galaxy',
    ],
    [
        'question' => '4.which of the phenomena occurs due to star?',
        'options' => ['Ozone', 'black hole', 'ranibow', 'comet'],
        'correct_option' => 'Black hole',
    ],
    [
        'question' => '5.which is the brightest star outside the solar system?',
        'options' => ['sirius', 'proxima', 'Alpha centauri', 'Beta centuary'],
        'correct_option' => 'sirius',
    ],
];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the submitted form (evaluate answers, calculate score, etc.)
    echo '<h2>Your Answers:</h2>';

    foreach ($questions as $index => $questionData) {
        $question = $questionData['question'];
        $options = $questionData['options'];
        $correctOption = $questionData['correct_option'];
        $userAnswer = $_POST["question_$index"];

        echo "<p>$question</p>";

        foreach ($options as $option) {
            $isCorrect = $option === $correctOption;
            $isSelected = $option === $userAnswer;

            // Add classes based on correctness and selection
            $classes = [];
            if ($isCorrect) {
                $classes[] = 'correct';
            }
            if (!$isCorrect && $isSelected) {
                $classes[] = 'incorrect';
            }

            $classAttribute = implode(' ', $classes);

            echo "<p class='$classAttribute'>$option</p>";
        }
    }
} else {
    // Display questions
    echo '<form method="post" action="">';

    foreach ($questions as $index => $questionData) {
        $question = $questionData['question'];
        $options = $questionData['options'];
    
        echo "<div class='question'>";
        echo "<p>$question</p>";
    
        foreach ($options as $optionIndex => $option) {
            echo "<label class='options'><input type='radio' name='question_$index' value='$optionIndex'> $option</label>";
        }
    
        echo "</div>";
    }
    
    echo "<button type='submit' class='submit-btn'>Submit</button>";
    echo "</form>";
}
?>

</div>

</body>
</html>
