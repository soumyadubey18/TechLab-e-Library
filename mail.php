<?php
// get data from form
$email = $_POST['email'];
$exampleFormControlSelect1 = $_POST['exampleFormControlSelect1'];
$exampleFormControlTextarea1 = $_PoST['exampleFormControlTextarea1'];
$exampleFormControlTextarea2 = $_POST['exampleFormControlTextarea2'];

$to = "digilibrary2022@gmail.com";

$subject = "Mail From TechLabs";

$txt ="Email = ". $email . "\r\n Query = ".$exampleFormControlSelect1 . "\r\n Concern =" . $exampleFormControlTextarea1 . "\r\n Feedback =" .$exampleFormControlTextarea2 ;


$headers = "From : noreply@techlab.com". "\r\n";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

// redirect
header("Location:thankyou.html");
?>
