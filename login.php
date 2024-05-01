<?php
include 'db.php'; // Your database connection file

session_start(); // Start the session to use session variables

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    // Prepare the SQL statement
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    
    // Bind parameters
    $stmt->bind_param("s", $email);
    
    // Execute the statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Fetch the user data
    $user = $result->fetch_assoc();

    if ($user && $password == $user['password']) {
        // Assuming you store user's ID in session after successful login
        $_SESSION['user_id'] = $user['id'];

        // Redirect to student.php after successful login
        header("Location: student.php");
        exit();
    } else {
        // Login failed
        echo "<script>
                alert('Login failed. Please try again.');
                window.location.href='studentlogin.php?login=fail';
              </script>";
        exit(); // Ensure the script stops executing after the redirect
    }
}
?>
