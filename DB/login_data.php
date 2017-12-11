<html>
<?php
$servername = "localhost";
$username = ".root";
$password = "";
$dbname = "Doctor_Patient";

$conn = new mysqli($servername, $username, $password, $dbname);




$sql = "SELECT D_Mail_Id,D_appoinmentNo FROM doctor";
$email=$_GET['email'];
$pass=$_GET['password'];
print "$email";
if ($conn->connect_error) {
    echo "Dead";
    die("Connection failed: " . $conn->connect_error);
}
getData($conn,$sql);
function getData($conn,$sql)
{
    while($row=mysql_fetch_assoc($result1))
    {
        $check_username=$row['username'];
        $check_password=$row['password'];
    }

    if($email == $check_username && $pass == $check_password){

        header ('location: schema.txt');

}else{
    <html>
    <script src=wrongpass.js></script>
    </html>
    header ('location: login.php');
}
mysqli_close($conn);
}
?>
</html>