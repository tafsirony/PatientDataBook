<html>
<?php
//include "prescription.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);
//$email=$_POST['email'];
include "value.php";
$sqlE = "SELECT P_Id FROM patient WHERE P_Mail_Id= '".$email."' ";
//where Pr_Date in ( select pr.Pr_Date from prescription group by p.Pr_Date having count(*) > 1)
getEmail($conn,$sqlE);
if ($conn->connect_error) {
    echo "Dead";
    die("Connection failed: " . $conn->connect_error);
}

function getEmail($conn,$sqlE)
{
    global $P_Id;
    $result = mysqli_query($conn, $sqlE);

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
                $P_Id = htmlspecialchars($field);
                //echo $email;
            }
            echo '</tr>';
        }
        // echo $email;
        return $P_Id;

    } else {
        //echo "<script>alert('wrong patient'); location.href='index.html';</script>";
    }
    mysqli_close($conn);

}
//mysqli_close($conn);
?>
</html>