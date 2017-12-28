<html>
<?php
echo "<p>hello</p>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);
//$email=$_GET['email'];
//$pass=$_GET['password'];
global $email;
$email="ruhul20@gmail.com";
$pass=1234;
$sql = "SELECT D_Mail_Id,D_Password FROM doctor";
getData($conn,$sql,1);
$sql = "SELECT P_Mail_Id,P_Password FROM patient";
getData($conn,$sql,2);
$sql = "SELECT L_Mail_Id,L_Password FROM labrotorian";
getData($conn,$sql,3);
if ($conn->connect_error) {
    echo "Dead";
    die("Connection failed: " . $conn->connect_error);
}

function getData($conn,$sql,$value)
{
    $flag=0;
    while($row=mysqli_fetch_assoc($result1)&& $flag==0)
    {
        $check_username=$row['D_Mail_Id'];
        $check_password=$row['D_Password'];
        $email="ruhul20@gmail.com";
        $pass=1234;
            if($email == $check_username && $pass == $check_password && $value==1){
        		mysqli_close($conn);
                header ('location: Doctor/index.php');
                $flag=1;
            }
    }
    while($row=mysqli_fetch_assoc($result1))
    {
        $check_username=$row['D_Mail_Id'];
        $check_password=$row['D_Password'];
        if($email == $check_username && $pass == $check_password && $value==2){
        		mysqli_close($conn);
                header ('location: Patient/index.php');

        }
    }
    while($row=mysqli_fetch_assoc($result1))
    {
        $check_username=$row['D_Mail_Id'];
        $check_password=$row['D_Password'];
        if($email == $check_username && $pass == $check_password && $value==3){
        		mysqli_close($conn);
                header ('location: Lab/index.php');
        }
    }
    if($flag=0){
    echo "<script>alert('wrong password!'); location.href='index.php';</script>";
    //<script src=wrongpass.js></script>
    //header ('location: index.php');
    }
}
mysqli_close($conn);
?>
</html>