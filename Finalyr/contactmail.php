<?php
$msg="";
if(isset($_POST['sendmail'])){
	require 'phpmailer\PHPMailerAutoload.php';
    require 'credential1.php';
//require 'phpmailer\class.phpmailer.php';
//require 'phpmailer\class.smtp.php';
  function sendemail($to,$from,$fromName,$body,$attachment=""){
	  $mail = new phpmailer;
	  $mail-> setFrom($from,$fromName);
	  $mail-> addAddress(EMAIL);
	  $mail-> addAttachment($attachment);
	  $mail-> subject='Contact From-Email';
	  $mail-> Body=$body;//($from,$fromName);
	  //$mail-> isHTML(isHtml:false);//($from,$fromName);
	       return $mail ->send();
  }
         $name=$_POST['name'];
		 $email=$_POST['email'];
		 $body=$_POST['body'];
	$file="attachment/".basename($_FILES['attachment']['name']);
         if(move_uploaded_file($_FILES['attachment']['tmp_name'],$file)){
			 if(sendemail(EMAIL,$email,$name,$body,$file)){
				 $msg ='Email Sent!';
			 }else
				 $msg='Email Failed';
		 }else
                $msg='Please check your attachment!';			 

}
?>
