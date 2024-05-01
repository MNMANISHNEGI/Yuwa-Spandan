<?php
session_start();

$page_title = "Password Change Update";

// Include header
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$page_title</title>
    <link rel="stylesheet" href="style.css"> <!-- Ensure the stylesheet path is correct -->
    <link rel="stylesheet" href="centered-style.css"> <!-- Add a new CSS file for centering -->
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
</header>

<main class="centered-content"> <!-- Apply centered-content class to center everything -->
HTML;
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if(isset($_SESSION['status'])) {
                ?>
                <div class="alert alert-success">
                    <h5><?= $_SESSION['status']; ?></h5>
                </div>
                <?php
                unset($_SESSION['status']);
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body p-4">
                        <form action="password_reset_code.php" method="POST">
                            <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];} ?>">
                            <div class="form-group ab-3">
                                <label>Email Address</label>
                                <input type="text" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" class="form-control" placeholder="Enter Email Address">
                            </div>
                            <div class="form-group ab-3">
                                <label>New Password</label>
                                <input type="password" name="new_password" class="form-control" placeholder="Enter New Password">
                            </div>
                            <div class="form-group mb-3">
                                <label>Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Enter Confirm Password">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="password_update" class="btn btn-success w-100">Update Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer
echo <<<HTML
</main>

<footer class="studentfooter">
    <p>Contact us: contact@echoesofhope.org</p>
    <p>Follow us on social media</p>
</footer>

</body>
</html>
HTML;
?>
