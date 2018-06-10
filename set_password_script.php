<?php
require("db.php");
$wachtwoord1 = mysqli_real_escape_string($conn, $_POST['newpass']);
$wachtwoord2 = mysqli_real_escape_string($conn, $_POST['confirm_newpass']);
$reset_ID = mysqli_real_escape_string($conn, $_POST['reset_ID']);

$reset_query = "select * from password_reset where reset_ID = '$reset_ID';";
$result = mysqli_query($conn, $reset_query);
$row = mysqli_fetch_assoc($result);
$uid = $row['uid'];
$expiration_date = $row['expiration_date'];
if(mysqli_num_rows($result) > 0 && $wachtwoord1 == $wachtwoord2){
	if($expiration_date > $date = date("Y-m-d H:i:s")){
		$hash = password_hash($wachtwoord1, PASSWORD_DEFAULT);
	$set_password_query = "update user_info set password='$hash' where user_id='$uid';";
	$delete_reset_query = "delete from password_reset where reset_ID = '$reset_ID';";
	mysqli_query($conn, $set_password_query);
	mysqli_query($conn, $delete_reset_query);
	echo "Wachtwoord instellen gelukt";
	echo "<script>window.location = 'https://vadaza.be'</script>";
	}
	else{
	echo "Resetlink verlopen. <a href='password_reset.php'>Vraag een nieuwe link aan</a>";
	}	
	
}
elseif(mysqli_num_rows($result) == 0){
echo "Opnieuw instellen link is al gebruikt. <a href='password_reset.php'>Vraag een nieuwe link aan</a>";
}
else{
echo "Wachtwoorden komen niet overeen. <a href='set_password.php?id=$reset_ID'>Probeer opnieuw</a>";
}
?>