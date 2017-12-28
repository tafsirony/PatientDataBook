<html>
<?php
//include "prescription.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);
//$email=$_POST['email'];
$sql = "SELECT M_Name,M_Quantity,M_Time,M_Timeline FROM medicine m RIGHT JOIN prescription pr ON pr.Pr_ID=m.Pr_ID RIGHT JOIN patient p ON p.P_Id=pr.P_Id WHERE p.P_Mail_Id= '".$email."' ";
//where Pr_Date in ( select pr.Pr_Date from prescription group by p.Pr_Date having count(*) > 1)
getData($conn,$sql);
if ($conn->connect_error) {
    echo "Dead";
    die("Connection failed: " . $conn->connect_error);
}

function getData($conn,$sql)
{

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
            echo "<script>alert('found patient'); location.href='prescription.php';</script>";

        } else {
            echo "<script>alert('wrong patient'); location.href='index.html';</script>";
        }
        mysqli_close($conn);

    $i=0;

}

//mysqli_close($conn);
?>
</html>