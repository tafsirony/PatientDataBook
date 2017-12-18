<html>
<?php
//include "prescription.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);
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
            //echcomo "connected";

            $first_row = false;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($first_row) {
                    $first_row = false;
                    // Output header row from keys.
                    echo '<tr>';
                    foreach ($row as $key => $field) {
                        echo '<p>' . htmlspecialchars($key) . '</p>';
                        echo '<p>' . htmlspecialchars($key) . '</p>';
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
            echo "<script>alert('wrong patient'); location.href='index.html';</script>";
        }
        mysqli_close($conn);
}
//mysqli_close($conn);
?>
</html>