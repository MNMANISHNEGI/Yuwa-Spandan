
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echoes of Hope</title>
    <link rel="stylesheet" href="studentlogin.css"> <!-- Ensure the stylesheet path is correct -->
</head>
<body >
<header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li> <!-- Updated link to homepage -->
                <li><a href="Resources.php">Resources</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
              
            </ul>
        </nav>
    </header>

<main>
    <div id="authContainer">
        <!-- Login Section -->
        <div id="loginSection">
        <img src="login.gif" alt="Signup Animation" class="signup-gif">
            <form method="post" action="login.php">
                <input type="email" name="loginEmail" placeholder="Email" required>
                <input type="password" name="loginPassword" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
            <a href="password_reset.php" onclick="toggleReset()">Forgot Password?</a>
            <br>
            <button onclick="toggleSignup()">Don't have an account? Sign up</button>
        </div>

        <!-- Reset Password Section -->


        <!-- Signup Section -->
        <div id="signupSection" style="display: none;">
        <img src="sign-up.gif" alt="Signup Animation" class="signup-gif">
            <form method="post" action="signup.php">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="signupEmail" placeholder="Email" required>
                <input type="text" name="university" placeholder="University" required>
                <input type="password" name="signupPassword" placeholder="Password" required>
                <button type="submit" name="signup">Signup</button>
            </form>
            <button onclick="toggleLogin()">Already have an account? Log in</button>
        </div>
    </div>
</main>

<footer>
    <p>Contact us: contact@echoesofhope.org</p>
    <p>Follow us on social media</p>
</footer>

<script>
    function toggleReset() {
        document.getElementById("loginSection").style.display = 'none';
        document.getElementById("resetPasswordSection").style.display = 'block';
    }

    function toggleLogin() {
        document.getElementById("signupSection").style.display = 'none';
        document.getElementById("loginSection").style.display = 'block';
    }

    function toggleSignup() {
        document.getElementById("loginSection").style.display = 'none';
        document.getElementById("signupSection").style.display = 'block';
    }
</script>
</body>
</html>
