<?php
session_start();

// Retrieve the results and recommended resources from the session
// $depression = $_SESSION['depression'] ?? 'Not available';
// $anxiety = $_SESSION['anxiety'] ?? 'Not available';
// $stress = $_SESSION['stress'] ?? 'Not available';

$depression_video = $_SESSION['depression_video'] ?? '#';
$depression_article = $_SESSION['depression_article'] ?? '#';

$anxiety_video = $_SESSION['anxiety_video'] ?? '#';
$anxiety_article = $_SESSION['anxiety_article'] ?? '#';

$stress_video = $_SESSION['stress_video'] ?? '#';
$stress_article = $_SESSION['stress_article'] ?? '#';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Results - Echoes of Hope</title>
    <link rel="stylesheet" href="style.css"> <!-- Adjust the path as needed -->
</head>
<body>
    <header>
        <div class="logo">ECHOES OF HOPE</div>
        <nav>
        <ul>
                <li><a href="homepage.php">Home</a></li> <!-- Updated link to homepage -->
                <li><a href="questions.php">Give Assessment</a></li> <!-- Updated link to questions page -->

                <li><a href="contactus.php">Contact</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="Resources.php">Resources</a></li>
                <li><a href="#book-online">Book Online</a></li>
            </ul>
        </nav>
    </header>
    <video autoplay muted loop id="myVideo" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%;">
        <source src="5.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <main class="results-main">
        <!-- <h1 class="assessment">Assessment Results</h1> -->
        <p class="assessbelow">Thank you for completing the assessment</p>
        <!-- <ul>
    <li class="result-item depression">Depression:<?php echo htmlspecialchars($depression); ?></li>
    <li class="result-item anxiety">Anxiety: <?php echo htmlspecialchars($anxiety); ?></li>
    <li class="result-item stress">Stress: <?php echo htmlspecialchars($stress); ?></li>
</ul> -->

        
        <div class="recommendations">
        <h2>Recommended Resources</h2>
            <section>
                <h3 class="result-item anxiety" >Depression</h3>
                <p class="resulttext">Based on your results, we recommend the following resources for depression:</p>
                <iframe width="700" height="400" src="<?php echo htmlspecialchars($depression_video); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="article">Article: <a href="<?php echo htmlspecialchars($depression_article); ?>" target="_blank">Read Article</a></p>
            </section>
            <section>
                <h3 class="result-item anxiety">Anxiety</h3>
                <p class="resulttext">Based on your results, we recommend the following resources for anxiety:</p>
                <iframe width="700" height="400" src="<?php echo htmlspecialchars($anxiety_video); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="article">Article: <a href="<?php echo htmlspecialchars($anxiety_article); ?>" target="_blank">Read Article</a></p>
            </section>
            <section>
                <h3 class="result-item anxiety">Stress</h3>
                <p class="resulttext">Based on your results, we recommend the following resources for stress:</p>
                <iframe width="700" height="400" src="<?php echo htmlspecialchars($stress_video); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="article">Article: <a href="<?php echo htmlspecialchars($stress_article); ?>" target="_blank">Read Article</a></p>
            </section>
        </div>
    </main>

    <footer>
        <p>Contact us: contact@echoesofhope.org</p>
        <p>Follow us on social media</p>
    </footer>
</body>
</html>
