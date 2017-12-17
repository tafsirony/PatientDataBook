<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT D_Mail_Id,D_appoinmentNo FROM doctor";
getData($conn,$sql,1);
$sql = "SELECT P_Mail_Id,P_PhnNo FROM patient";
getData($conn,$sql,2);
$sql = "SELECT L_Name,L_Id FROM labrotorian";
getData($conn,$sql,3);
$email=$_GET['email'];
$pass=$_GET['password'];
print "$email";
if ($conn->connect_error) {
    echo "Dead";
    die("Connection failed: " . $conn->connect_error);
}

function getData($conn,$sql,$value)
{
    while($row=mysqli_fetch_assoc($result1))
    {
        $check_username=$row['username'];
        $check_password=$row['password'];
    }
    echo $email;
    if($email == $check_username && $pass == $check_password && $value==1){
		mysqli_close($conn);
        header ('location: Doctor/index.php');

    }else if($email == $check_username && $pass == $check_password && $value==2){
		mysqli_close($conn);
        header ('location: Patient/index.php');

    }else if($email == $check_username && $pass == $check_password && $value==3){
		mysqli_close($conn);
        header ('location: Lab/index.php');
    }
    else{
    //<script src=wrongpass.js></script>
    header ('location: index.php');
    }
}
mysqli_close($conn);
?>
</html>