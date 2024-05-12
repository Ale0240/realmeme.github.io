<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php use PHPMailer\PHPMailer\PHPMailer; ?>
<?php

 // use PHPMailer\PHPMailer;
 // use PHPMailer\Exception;

// require 'path/to/PHPMailer/Exception.php';
// require 'path/to/PHPMailer/PHPMailer.php';
// require 'path/to/PHPMailer/SMTP.php';
require 'config.php';
if(isset($_POST['submit'])) {

    $email = $_POST['email'];

    // Check if the email exists in the database
    $check_email = "SELECT * FROM `signup` WHERE Email = '$email'";
    $result = mysqli_query($conn, $check_email);

    if(mysqli_num_rows($result) > 0) {
        // Generate a random password
        $new_password = substr(md5(rand()), 0, 8);

        // Update the user's password in the database
        $update_password = "UPDATE `signup` SET Password = '$new_password' WHERE Email = '$email'";
        if(mysqli_query($conn, $update_password)) {
include_once 'PHPMailer/PHPMailer.php';
include_once 'PHPMailer/Exception.php';
include_once 'PHPMailer/SMTP.php';



            // Send the user an email with their new password
            $mail = new PHPMailer();
            $mail->isSMTP();
           // $mail->SMTPDebug = 0;

           // $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->Host = 'smtp.gmail.com';  // Specify SMTP server
            $mail->Port = 587; // SMTP port
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'aliygalig@gmail.com'; // SMTP username
            $mail->Password = 'vdrzoblbwtxqynef'; // SMTP password
            $mail->setFrom('aliygalig@gmail.com', 'KinJobs');
            $mail->addAddress($email); // Add a recipient
            $mail->Subject = 'New Password';
            $mail->Body = "Your new password is: $new_password";
            if($mail->send()) {
                // Redirect the user to a page indicating that their new password has been sent
              //  header("Location: password_sent.php");
                echo "string";
                exit;
            } else {
                // If the email fails to send, display an error message
                echo "Failed to send email: " . $mail->ErrorInfo;
            }
        } else {
            // If the password update fails, display an error message
            echo "Failed to update password.";
        }
    } else {
        // If the email does not exist in the database, display an error message
        echo "Email not found.";
    }
}
?>


<form method="post" action="forget.php">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>