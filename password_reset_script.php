<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
		<script src="https://unpkg.com/promise-polyfill"></script>
    </head>
<body>
<?php
require("db.php");

$from = 'support@vadaza.be';
$to = $_POST['email'];
$subject = "Wachtwoord opnieuw instellen";
$reset_ID = bin2hex(random_bytes(64));
$message = "https://vadaza.be/set_password.php?id=" . $reset_ID;

$uid_query = "select * from user_info where email = '$to';";
$result = mysqli_query($conn, $uid_query);
$row = mysqli_fetch_assoc($result);
$uid = $row['user_id'];


$date = date("Y-m-d H:i:s", strtotime('+20 minutes'));

$password_reset_query = "insert into password_reset (reset_ID, expiration_date, uid) VALUES('$reset_ID', '$date', '$uid');";
mysqli_query($conn, $password_reset_query);

    $headers = 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $to . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo "<script>
swal({
title: 'Check je mail!',
text: 'We hebben je een bericht gestuurd waarmee je je wachtwoord kan resetten!',
type: 'success'
}).then(function() {
window.location.href = 'https://vadaza.be';
});
</script>";


?>
</body>
</html>