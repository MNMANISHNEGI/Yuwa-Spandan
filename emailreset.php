<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echoes of Hope</title>
    <link rel="stylesheet" href="style.css"> <!-- Ensure the stylesheet path is correct -->
</head>
<body>
<header>
    <div class="logo">ECHOES OF HOPE</div>
    <nav>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="questions.php">Give Assessment</a></li>
            <li><a href="studentlogin.php">Student</a></li>
            <li><a href="contactus.php">Contact</a></li>
            <li><a href="Resources.php">Resources</a></li>
            <li><a href="faq.php">FAQ</a></li>
        </ul>
    </nav>
</header>
<main>
    <div id="authContainer">
        <div id="forgotPasswordSection">
            <h2>Forgot Password</h2>
            <form method="post" action="password_reset.php">
                <input type="email" name="resetEmail" placeholder="Enter your email" required>
                <button type="submit" name="reset_code">Send Code</button>
            </form>
        </div>
    </div>
</main>
<footer>
    <p>Contact us: contact@echoesofhope.org</p>
    <p>Follow us on social media</p>
</footer>
</body>
</html>
