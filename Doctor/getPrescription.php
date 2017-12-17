<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);
$email=$_POST['email'];
$sql = "SELECT M_Name,M_Quantity,M_Time,M_Timeline FROM medicine m RIGHT JOIN prescription pr ON pr.Pr_ID=m.Pr_ID RIGHT JOIN patient p ON p.P_Id=pr.P_Id";
getData($conn,$sql);
if ($conn->connect_error) {
    echo "Dead";
    die("Connection failed: " . $conn->connect_error);
}

function getData($conn,$sql,$value)
{
    while($row=mysqli_fetch_assoc($result1))
    {

    }
    if(1){
    echo "<script>alert('wrong password!'); location.href='index.php';</script>";
    //<script src=wrongpass.js></script>
    //header ('location: index.php');
    }
}
mysqli_close($conn);
?>
</html>