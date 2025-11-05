<?php
	$userIp=$_SERVER['REMOTE_ADDR'];
	$recaptchaResponse = trim($_GET['g-recaptcha-response']);
    $secret = "6LdEWPsrAAAAAEuZnxvkLmi1Z_xADF9E8SuLtzqg";
    $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
 
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);      
         
        $status= json_decode($output, true);

 if ($status['success'] == 1) 
{
?>
<meta http-equiv="refresh" content="0; url=https://www.onthewayhotels.com/thanks.php">

<?php

$to = 'info@onthewayhotels.com';

$subject = "Feedback from Onthewayhotels.com";

$body=$body."Name : ".$_GET['Name']."\n\n";

$body=$body."Email : ".$_GET['Email']."\n\n";

$body=$body."Mobile : ".$_GET['Mobile']."\n\n";

$body=$body."Mobile : ".$_GET['Subject']."\n\n";

$body=$body."Message/Feedback : ".$_GET['Remarks']."\n\n";

$header1='info@onthewayhotels.com';
$message = $body;
//$headers101 =  "From: ".$header1."\r\nReply-To:" .$to;
$headers101 =  "From: Onthewayhotels.com <$header1>\r\nReply-To:" .$to;
$mail_sent = @mail( $to, $subject, $message, $headers101 );
?>

 <?php
}
else
{
	echo "<script>  alert('reCAPTCHA verification failed. Please try again.'); history.back(1)</script>";
	//$_SESSION["error"] = "reCAPTCHA verification failed. Please try again.";
	//echo "<script>location.href='".$_SERVER["HTTP_REFERER"]."'</script>";
}

 ?>