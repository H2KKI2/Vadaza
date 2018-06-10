<?php
session_start();
require "db.php";

$user_pass = mysqli_real_escape_string($conn, $_POST["wachtwoord"]);
$new_pass = mysqli_real_escape_string($conn, $_POST["newpass"]);
$new_pass_confirm = mysqli_real_escape_string($conn, $_POST["newpassconfirm"]);


$id = $_SESSION['uid'];
$id_query = "select * from user_info where user_id like '$id';";

$result = mysqli_query($conn, $id_query);
$row = mysqli_fetch_assoc($result);
$password_hash = $row['password'];



if(password_verify($user_pass, $password_hash)){
    
	$hash = password_hash($new_pass, PASSWORD_DEFAULT);
    
	$mysql_qry = "update user_info set password='$hash' where user_id=$id";
    
		if($conn->query($mysql_qry) === TRUE && $new_pass == $new_pass_confirm){
			echo "Wachtwoord instellen gelukt";
			echo "<script>window.location = 'https://vadaza.be'</script>";
		}
		else{
			echo "Nieuwe wachtwoorden komen niet overeen.";
		}
			
		
		
		$conn->close();	
}
else{
	echo "Oud wachtwoord fout";
}
?>