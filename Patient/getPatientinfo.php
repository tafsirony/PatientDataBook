<html>
<?php
//include "prescription.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);
//$email=$_POST['email'];
$email="ruhul20@gmail.com";
$sql = "SELECT P_Name,P_Age,P_Mail_Id,P_Gender,P_PhnNo FROM patient WHERE P_Mail_Id='".$email."'";
//where Pr_Date in ( select pr.Pr_Date from prescription group by p.Pr_Date having count(*) > 1)
getDataInfo($conn,$sql);
if ($conn->connect_error) {
    echo "Dead";
    die("Connection failed: " . $conn->connect_error);
}

function getDataInfo($conn,$sql)
{

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        //echcomo "connected";

        $first_row = false;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($first_row) {
                $first_row = false;
                // Output header row from keys.
                //echo '<tr>';
                foreach ($row as $key => $field) {
                    //echo '<p>' . htmlspecialchars($key) . '</p>';
                    //echo '<p>' . htmlspecialchars($key) . '</p>';
                }
                //echo '</tr>';
            }
            foreach ($row as $key => $field) {
                echo '<p>' . htmlspecialchars($field) . '</p>';
            }
        }

    } else {
        echo "wrong";
        //echo "<script>alert('wrong patient'); location.href='index.php';</script>";
    }
    mysqli_close($conn);
}
//mysqli_close($conn);
?>
</html>