<?php 

$to = 'gurungalex9352@gmail.com';
$subject = 'Subject ';
$message = 'hello';
$headers = 'From: unitykat37@gmail.com' . phpversion();

if(mail($to, $subject, $message, $heasders)){
    echo "Email sent successfully to $to";

}else{
    echo "Email sending failed";
}

// phpinfo();


?>