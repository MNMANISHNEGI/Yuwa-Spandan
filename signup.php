<?php
include 'db.php';  // Your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['signupEmail'];
    $university = $_POST['university'];
    $password = $_POST['signupPassword'];
    $verify_token = bin2hex(random_bytes(32)); // Generate a random token for verification

    // Prepare statement
    $stmt = $con->prepare("INSERT INTO users (name, email, university, password, verify_token, verify_status) VALUES (?, ?, ?, ?, ?, 0)");

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("sssss", $name, $email, $university, $password, $verify_token);

        // Execute statement
        if ($stmt->execute()) {
            echo "<script>
                alert('Sign up successful. Please log in.');
                window.location.href='studentlogin.php?signup=success';
            </script>";
        } else {
            echo "Execution failed: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Preparation failed: " . $con->error;
    }
}
?>
