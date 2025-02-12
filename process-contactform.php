
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'sendemail/phpmailer/src/Exception.php';
require 'sendemail/phpmailer/src/PHPMailer.php';
require 'sendemail/phpmailer/src/SMTP.php';


if(isset($_POST["submit"])) {
    $mail = new PHPMailer(true);
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '2778967812wyf@gmail.com'; // Your gmail
    $mail->Password = 'xcvddjpywiozmmfq'; // Your gmail app password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('2778967812wyf@gmail.com', 'Website Contact Form');
    $mail->addAddress('2778967812wyf@gmail.com');
    

    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    $emailAddress = $_POST["EmailAddress"];
    $message = $_POST["Message"];

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission from ' . $firstName . ' ' . $lastName;
    $mail->Body = '
        <h1New Contact Form Submission</h1>
        <p><strong>Name：</strong> ' . $firstName . ' ' . $lastName . '</p>
        <p><strong>Email：</strong> ' . $emailAddress . '</p>
        <p><strong>Message：</strong></p>
        <p>' . nl2br($message) . '</p>
    ';
    try {
        if ($mail->send()) {
        
            header("Location: contactus.php?success=1");
            exit();
        } else {
            header("Location: contactus.php?error=1");
            exit();
        }
    } catch (Exception $e) {
        header("Location: contactus.php?error=" . urlencode($mail->ErrorInfo));
        exit();
    }
    

}
?>