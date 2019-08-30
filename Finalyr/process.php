<?php


if($_SERVER["REQUEST_METHOD"] === "POST")
{


    $recaptcha_secret = "6Lc1F1MUAAAAAGgnS9Rbl5qamJ6CJ3xXuDb27mzL";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
    $response = json_decode($response, true);


    if($response["success"] === true){
        header("Location: UserDetails.html"); 
          exit;
    }else{
        echo "Sorry!! You are a robot";
    }
}
?>