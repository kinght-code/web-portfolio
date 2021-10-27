<?php
	$name = $_POST['First Name'];
	$lastname = $_POST['Last Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['message'];
  
    $to = "shahariarkazi80352@gmail.com"
    $body = ""



    $body .= "From: ".$username." \r\n";
    $body .= "From: ".$userlastname." \r\n";
    $body .= "From: ".$useremail." \r\n";
    $body .= "From: ".$usersubject." \r\n";
    $body .= "From: ".$usermassage." \r\n";

    mail($to,$name,$email,$subject,$message,$body)























    // $mailheader = "From:".$name."<".$email.">\r\n";
    
    // $recipient = "sofiullahc@gmail.com";
    
    // mail($recipient, $subject, $message, $mailheader) or die("Error!");    


?>
 