<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Email - Echoes of Hope</title>
    <link rel="stylesheet" href="style.css"> <!-- Ensure the stylesheet path is correct -->
</head>
<body>
<header>
    <div class="logo">ECHOES OF HOPE</div>
    <!-- Your navigation menu goes here -->
</header>
<main>
    <div id="authContainer">
        <div id="checkEmailSection">
            <h2>Check Your Email</h2>
            <p><?php echo isset($_SESSION['status']) ? $_SESSION['status'] : ''; ?></p>
        </div>
    </div>
</main>
<footer>
    <p>Contact us: contact@echoesofhope.org</p>
    <p>Follow us on social media</p>
</footer>
</body>
</html>
