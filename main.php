<?php
//get data from form  
$name = $_POST['fullname'];
$phonenumber= $_POST['phonenumber'];
$requirement= $_POST['requirement'];
$requirement= $_POST['requirement'];
$comment= $_POST['comment'];
$to = "knvrajesh@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Mobile = " . $phonenumber . "\r\n Requirement =" . $requirement . "\r\n Comment= " . $comment;
$headers = "From: noreply@avatarbiopharma.com" . "\r\n" .
"CC: mallesh2008k@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contactus.php");
?>
