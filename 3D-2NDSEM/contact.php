<div class="fullbody"></div>
<div class="p1">
    <h1 class="t1">Leave us a Message</h1>
    <div class="form-container">
  
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "your-email@example.com"; // replace with your email address
    $subject = "New Message from Website Form";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $mailBody = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    mail($to, $subject, $mailBody, $headers);
}
?>

<form  method="post">
    <!-- Your form fields remain unchanged -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Your Name">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Your Email">

    <label for="message">Message:</label>
    <textarea id="message" name="message" placeholder="Your Message"></textarea>

    <button type="submit">Submit</button>
</form>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "whathe201@gmail.com"; // replace with your email address
    $subject = "New Message from Ecode Company";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $mailBody = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    mail($to, $subject, $mailBody, $headers);
}
?>

<style>
    .p1 {
        position: relative;
        background-image: url("prod1.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 700px;
        overflow: hidden;
    }

    .p1::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)); /* Adjust the transparency values as needed */
        z-index: 1;
    }

    .t1 {
        text-align: center;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        position: absolute;
        transform: translate(-50%, -50%);
        z-index: 2;
        left: 50%;
        margin-top: 80px;
        font-size: 40px;
    } .form-container {
        background-color: wheat;
        position: absolute;
        height: 300px;
        width: 75%;
        z-index: 2;
        border-radius: 30px;
        top: 30%;
        left: 13%;
        padding: 20px; /* Added padding for better aesthetics */
        box-sizing: border-box; /* Ensure padding is included in the width */
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    label {
        margin-bottom: 5px;
        color: #333;
    }

    input,
    textarea {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        padding: 10px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
