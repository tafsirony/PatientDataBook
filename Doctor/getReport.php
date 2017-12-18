<html>
<?php
//include "prescription.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);
//$email=$_POST['email'];

//echo "<script>var email=prompt('Enter user mail')</script>";
//$email="<script>document.write(email)</script>";
//echo "$email getReport";
$sql = "SELECT Test_type,t.T_Name,TW_Normal,TW_Abnormal,TW_Flag,TW_Reference_Range,Tw_Date,d.D_Name FROM test_writen tw RIGHT JOIN test t ON t.T_Id=tw.T_Id RIGHT JOIN patient p ON p.P_Id=t.P_Id JOIN doctor d ON d.D_Id=t.D_Id WHERE p.P_Mail_Id= '".$email."'AND 
  Tw_Date = ( SELECT Tw_Date FROM test_writen WHERE test_writen.Tw_Date > '2014/02/25' ORDER BY Tw_Date DESC LIMIT 1 ) ORDER BY Tw_Date DESC, T_Name DESC
LIMIT 200";
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
        //echcomo "connected";

        $first_row = false;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($first_row) {
                $first_row = false;
                // Output header row from keys.
                echo '<tr>';
                foreach ($row as $key => $field) {
                    echo '<th>' . htmlspecialchars($key) . '</th>';
                }
                echo '</tr>';
            }
            echo '<tr>';
            foreach ($row as $key => $field) {
                echo '<td>' . htmlspecialchars($field) . '</td>';
            }
            echo '</tr>';
        }

    } else {
        //echo "<script>alert('wrong patient'); location.href='index.html';</script>";
    }
    mysqli_close($conn);

}
//mysqli_close($conn);
?>
</html>