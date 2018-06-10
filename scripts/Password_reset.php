<?php

$user_name = "yanu.szapinszky@gmail.com";
$user_pass = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!$%*#+-", 5)), 0, 8);
$tabel = "user_info";
$id_query = "select * from user_info where email like '$user_name';";
$result = mysqli_query($conn, $id_query);
$row = mysqli_fetch_assoc($result);
$idnaam = "user_id";

$id = $row['user_id'];

$hash = password_hash($user_pass, PASSWORD_DEFAULT);
    
    $mysql_qry = "update user_info set password='$hash' where user_id=$id";
    
if($conn->query($mysql_qry) === TRUE){
    
    echo "Wachtwoord instellen gelukt.";
    echo " ".$user_pass;
}
else{
	echo     "Er is iets fout gegaan.";
}
$conn->close();
}
else{
    header("Location: https://vadaza.be");
die();
}
?>


