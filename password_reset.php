<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Form - Echoes of Hope</title>
    <link rel="stylesheet" href="style.css">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Show form container on page load
            document.querySelector(".resetemail").classList.add("active");

            // Show alert message if it exists
            var alertMessage = "<?php echo isset($_SESSION['status']) ? $_SESSION['status'] : ''; ?>";
            if (alertMessage !== "") {
                alert(alertMessage);
            }
        });
    </script>
</head>
<body>

<header>
    <div class="logo"></div>
    <nav>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="questions.php">Give Assessment</a></li>
            <li><a href="studentlogin.php">Student</a></li>
            <li><a href="contactus.php">Contact</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
        </ul>
    </nav>
</header><div class="container resetemail">
    <div class="gif-container">
        <img src="forgetgif.gif" alt="Reset Password GIF" class="reset-gif"> <!-- Replace with your GIF image -->
    </div>
    <?php
    session_start();
    if (isset($_SESSION['status'])) {
        ?>
        <div class="alert alert-success"><?= $_SESSION['status']; ?></div>
        <?php
        unset($_SESSION['status']);
    }
    ?>
    <div class="form-container">
        <div class="card">
            <div class="card-body">
                <form class="forget" action="password_reset_code.php" method="POST">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="password_reset_link" class="btn btn-primary">Send Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<footer class="studentfooter">
    <p>Contact us: contact@echoesofhope.org</p>
    <p>Follow us on social media</p>
</footer>

</body>
</html>
