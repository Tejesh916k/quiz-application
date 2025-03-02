<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Correct answers
$answers = [
    "q1" => "Dr. Rajendra Prasad",
    "q2" => "Tiger",
    "q3" => "3",
    "q4" => "12",
    "q5" => "26",
    "q6" => "28",
    "q7" => "210",
    "q8" => "APJ Abdul Kalam",
    "q9" => "97.5",
    "q10" => "Rabindranath Tagore"
];

$score = 0;
$username = $_POST['username'];

foreach ($answers as $key => $value) {
    if (isset($_POST[$key]) && $_POST[$key] == $value) {
        $score++;
    }
}

$sql = "INSERT INTO users (name, score) VALUES ('$username', '$score')";
$conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>←Quiz Completed→</h2>
        <p>Thank you, <?php echo htmlspecialchars($username); ?> !</p>
        <p class="score">Your Score: <span style="color: chartreuse; font-size:larger"><?php echo $score; ?> / 10 </span> <span style="font-size: 30px;">⌖</span></p>
        
        <a href="index.php">↪<span style="text-decoration: underline;">Take Quiz Again </span></a>
    </div>
</body>
</html>
