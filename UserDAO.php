<?php
require_once('Dbcon.php');
Class UserDAO {
    function getAllUsers() {
        $dbConn = new Dbcon();
        $query = mysqli_query($dbConn->getdbconnect(), "SELECT * FROM Users");
        return mysqli_fetch_all($query);
    }
    function addUser($username,$password){
        $dbConn = new Dbcon();
        mysqli_query($dbConn->getdbconnect(),"insert into Users values('$username','$password')");
    }
}
?>
