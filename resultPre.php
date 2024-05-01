<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preassessment Submitted</title>
    <link rel="stylesheet" href="style.css"> <!-- Ensure you have this CSS file for styling -->
</head>
<body>
    <div class="thank-you-message">
        <h1>Thank You for Submitting Your Preassessment!</h1>
        <p>You will be able to take the postassessment 7 days from now.</p>
        <p><b>Date for Postassessment:</b> <span id="postAssessmentDate"></span></p>
        <a href="homepage.php">Return to Home</a>
    </div>

    <script>
        // JavaScript to calculate and display the post-assessment date
        const postAssessmentDate = new Date();
        postAssessmentDate.setDate(postAssessmentDate.getDate() + 7);
        document.getElementById('postAssessmentDate').textContent = postAssessmentDate.toLocaleDateString();
    </script>
</body>
</html>
