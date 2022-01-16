<?php 
if(isset($_POST['submit'])){
    $to = "ilona.pltr@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo '<a href="ePortfolio.html" >"Mail Sent. Thank you " . $name . ", we will contact you shortly."</a>';
    }
?>