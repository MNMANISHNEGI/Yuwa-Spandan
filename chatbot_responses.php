<?php
session_start(); // Start the session if not already started
require 'db.php'; // Include your database connection file
require 'logic.php'; // Include your logic file

// Get the data sent from the client-side JavaScript
$data = json_decode(file_get_contents("php://input"), true);

// Extract the data
$name = $data['name'];
$email = $data['email'];
$answers = json_encode($data['answers']); // Convert answers array to JSON

// Calculate scores
// Adjust these calculations based on your scoring mechanism
$depression_scores = array_sum(array_intersect_key($answers, array_flip(['question5', 'question7', 'question12', 'question15', 'question18', 'question19', 'question23']))) * 2;
$anxiety_scores = array_sum(array_intersect_key($answers, array_flip(['question4', 'question6', 'question9', 'question11', 'question17', 'question21', 'question22']))) * 2;
$stress_scores = array_sum(array_intersect_key($answers, array_flip(['question3', 'question8', 'question10', 'question13', 'question14', 'question16', 'question20']))) * 2;

// Determine the severity levels
$depression_severity = determine_severity($depression_scores, 'depression');
$anxiety_severity = determine_severity($anxiety_scores, 'anxiety');
$stress_severity = determine_severity($stress_scores, 'stress');

// Insert data into the database
$query = $pdo->prepare("INSERT INTO responses (name, email, answers, depression_score, anxiety_score, stress_score, depression_severity, anxiety_severity, stress_severity) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$query->execute([$name, $email, $answers, $depression_scores, $anxiety_scores, $stress_scores, $depression_severity, $anxiety_severity, $stress_severity]);

// Prepare session variables for redirection
$_SESSION['depression'] = $depression_severity;
$_SESSION['anxiety'] = $anxiety_severity;
$_SESSION['stress'] = $stress_severity;

$_SESSION['depression_video'] = $recommendations['depression'][$depression_severity][0];
$_SESSION['depression_article'] = $recommendations['depression'][$depression_severity][1];
$_SESSION['anxiety_video'] = $recommendations['anxiety'][$anxiety_severity][0];
$_SESSION['anxiety_article'] = $recommendations['anxiety'][$anxiety_severity][1];
$_SESSION['stress_video'] = $recommendations['stress'][$stress_severity][0];
$_SESSION['stress_article'] = $recommendations['stress'][$stress_severity][1];

// Send a response back to the client-side JavaScript
echo json_encode(['success' => true]); // You can customize the response as needed
?>
