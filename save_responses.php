<?php
// db.php - Assuming you have your database connection logic here

// Include the database connection
include 'db.php';

// Include the logic.php file
include 'logic.php';

// Retrieve data from POST request
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$answers = $_POST['answers'] ?? '';

// Check if all required data is present
if (empty($name) || empty($email) || empty($answers)) {
    echo json_encode(['status' => 'error', 'message' => 'Incomplete data received']);
    exit;
}

// Decode JSON string to array
$answersArray = json_decode($answers, true);

// Calculate depression, anxiety, and stress scores using logic from logic.php
$depression_scores = array_sum(array_intersect_key($answersArray, array_flip(['question5', 'question7', 'question12', 'question15', 'question18', 'question19', 'question23']))) * 2;
$anxiety_scores = array_sum(array_intersect_key($answersArray, array_flip(['question4', 'question6', 'question9', 'question11', 'question17', 'question21', 'question22']))) * 2;
$stress_scores = array_sum(array_intersect_key($answersArray, array_flip(['question3', 'question8', 'question10', 'question13', 'question14', 'question16', 'question20']))) * 2;

// Determine the severity levels using the determine_severity function from logic.php
$depression_severity = determine_severity($depression_scores, 'depression');
$anxiety_severity = determine_severity($anxiety_scores, 'anxiety');
$stress_severity = determine_severity($stress_scores, 'stress');

// Prepare and execute the SQL statement to save data
$stmt = $con->prepare("INSERT INTO responses (name, email, answers, depression_score, anxiety_score, stress_score, depression_severity, anxiety_severity, stress_severity) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $name, $email, json_encode($answersArray), $depression_scores, $anxiety_scores, $stress_scores, $depression_severity, $anxiety_severity, $stress_severity);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Responses saved successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error saving responses: ' . $stmt->error]);
}

// Close the statement and database connection
$stmt->close();
$con->close();
?>
