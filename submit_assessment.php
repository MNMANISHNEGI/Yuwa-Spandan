<?php
session_start(); // Start the session at the top
require 'db.php';
require 'logic.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Your existing data processing logic...
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $answers = [];

    // Assuming you have 21 questions, adjust the range as necessary
    for ($i = 3; $i <= 23; $i++) {
        $answers["question$i"] = isset($_POST["question$i"]) ? (int)$_POST["question$i"] : 0;
    }

    // Calculate scores
    // Adjust these calculations based on your scoring mechanism
    $depression_scores = array_sum(array_intersect_key($answers, array_flip(['question5', 'question7', 'question12', 'question15', 'question18', 'question19', 'question23']))) * 2;
    $anxiety_scores = array_sum(array_intersect_key($answers, array_flip(['question4', 'question6', 'question9', 'question11', 'question17', 'question21', 'question22']))) * 2;
    $stress_scores = array_sum(array_intersect_key($answers, array_flip(['question3', 'question8', 'question10', 'question13', 'question14', 'question16', 'question20']))) * 2;

    // Determine the severity levels
    $depression_severity = determine_severity($depression_scores, 'depression');
    $anxiety_severity = determine_severity($anxiety_scores, 'anxiety');
    $stress_severity = determine_severity($stress_scores, 'stress');

    // Insert data into the database using MySQLi
    $stmt = $con->prepare("INSERT INTO responses (name, email, answers, depression_score, anxiety_score, stress_score, depression_severity, anxiety_severity, stress_severity) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $name, $email, json_encode($answers), $depression_scores, $anxiety_scores, $stress_scores, $depression_severity, $anxiety_severity, $stress_severity);
    $stmt->execute();
    $stmt->close();

    // Assign values to session variables
    $_SESSION['depression'] = $depression_severity;
    $_SESSION['anxiety'] = $anxiety_severity;
    $_SESSION['stress'] = $stress_severity;

    $_SESSION['depression_video'] = $recommendations['depression'][$depression_severity][0];
    $_SESSION['depression_article'] = $recommendations['depression'][$depression_severity][1];
    $_SESSION['anxiety_video'] = $recommendations['anxiety'][$anxiety_severity][0];
    $_SESSION['anxiety_article'] = $recommendations['anxiety'][$anxiety_severity][1];
    $_SESSION['stress_video'] = $recommendations['stress'][$stress_severity][0];
    $_SESSION['stress_article'] = $recommendations['stress'][$stress_severity][1];

    // Redirect to results page
    header('Location: results.php');
    exit;
}
?>
