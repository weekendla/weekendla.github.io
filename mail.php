<?php
if ($_POST) {
    $name  = $_POST['name'];
    $number = $_POST['number'];
    $text  = $_POST['text'];
    $radio  = $_POST['radio'];
    $checkbox  = $_POST['checkbox'];
    
    $headers = $number . "\r\n\r\n". $radio ."\r\n". $checkbox ."\r\n\r\n Message: \r\n". $text;
    
    //send email   
    mail("matt.zell@gmail.com", "Contact Form: Wedding Question", $headers, $name);
}

?>