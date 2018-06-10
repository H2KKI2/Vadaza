<?php
$to = 'support@vadaza.be';
$subject = $_POST["naam"];
$message = $_POST["bericht"];
$from = $_POST["email"];
if(!empty($from)){
    $headers = 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "<script>
alert('Bericht verzonden');
window.location.href='https://vadaza.be/';
</script>";
}
else{
    header("Location: https://vadaza.be/%22");
die();
}
?>