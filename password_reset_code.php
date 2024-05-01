<?php
session_start();
include('db.php'); // Include db.php to establish database connection

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require 'vendor/autoload.php';

function send_password_reset($get_name, $get_email, $token) {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true); // Use true to enable exceptions

    // SMTP settings
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'csoul6738@gmail.com'; // SMTP username
    $mail->Password = 'soumrtevqglafcua'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    // Sender and recipient settings
    $mail->setFrom('csoul6738@gmail.com', 'Echoes of Hope');
    $mail->addAddress($get_email);

    // Email content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Reset Password Notification';
    $email_template = "
        <h2>Hello</h2>
        <h3>You are receiving this email because we received a password reset request for your account.</h3>
        <br/><br/>
        <a href='http://localhost/password_change.php?token=$token&email=$get_email'>Click here to reset your password</a>
    ";
    $mail->Body = $email_template;

    $mail->send();
}

if(isset($_POST['password_reset_link'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']); 
    $token = md5(rand());

    $check_email = "SELECT email FROM users WHERE email='$email' LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if(mysqli_num_rows($check_email_run) > 0) {
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['name'];
        $get_email = $row['email'];

        $update_token = "UPDATE users SET verify_token='$token' WHERE email='$get_email' LIMIT 1";
        $update_token_run = mysqli_query($con, $update_token);

        if($update_token_run) {
            send_password_reset($get_name, $get_email, $token);
            $_SESSION['status'] = "We emailed you a password reset link."; 
            header("Location: password_reset.php");
            exit(0);
        } else {
            $_SESSION['status'] = "Something went wrong. #1"; 
            header("Location: password_reset.php");
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No Email Found";
        header("Location: password_reset.php");
        exit(0);
    }
}

if(isset($_POST['password_update'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
    $token = mysqli_real_escape_string($con, $_POST['password_token']);

    if(!empty($token)) {
        if(!empty($email) && !empty($new_password) && !empty($confirm_password)) {
            $check_token = "SELECT verify_token FROM users WHERE verify_token='$token' LIMIT 1";
            $check_token_run = mysqli_query($con, $check_token);
            if(mysqli_num_rows($check_token_run) > 0) {
                if($new_password == $confirm_password) {
                    $update_password = "UPDATE users SET password='$new_password', verify_status=1 WHERE verify_token='$token' LIMIT 1";
                    $update_password_run = mysqli_query($con, $update_password);
                    if($update_password_run) {
                        $_SESSION['status'] = "New password successfully updated."; 
                        header("Location: studentlogin.php?token=$token&email=$email"); 
                        exit(0);
                    } else {
                        $_SESSION['status'] = "Failed to update password. Something went wrong."; 
                        header("Location: password_change.php?token=$token&email=$email"); 
                        exit(0);
                    }
                } else {
                    $_SESSION['status'] = "Password and Confirm Password do not match"; 
                    header("Location: password_change.php?token=$token&email=$email"); 
                    exit(0);
                }
            } else {
                $_SESSION['status'] = "Invalid token"; 
                header("Location: password_change.php?token=$token&email=$email"); 
                exit(0);
            }
        } else {
            $_SESSION['status'] = "All fields are mandatory"; 
            header("Location: password_change.php?token=$token&email=$email"); 
            exit(0);
        }
    } else {
        $_SESSION['status'] = "No token available"; 
        header("Location: password_change.php"); 
        exit(0);
    }
}
?>
