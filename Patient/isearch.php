<html>
<?php
//include "prescription.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);
//$email=$_POST['email'];
$sql = "INSERT INTO search(search) VALUES ('$email') ";
mysqli_query($conn, $sql);
?>
</html>