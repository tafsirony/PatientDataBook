<html>
<?php
//include "prescription.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);
//$email=$_POST['email'];
include 'pEmail.php';
$pId="$P_Id";
$sql = "SELECT Tr_Date, Tr_Complain, Tr_Illness, Tr_FHistory, Tr_MHistory, Tr_DHistory, Tr_IHistory, Tr_LInvestigation, P_Id, D_Id FROM treatment WHERE P_Id= '".$pId."' ";
//where Pr_Date in ( select pr.Pr_Date from prescription group by p.Pr_Date having count(*) > 1)
getDataTreatment($conn,$sql);
if ($conn->connect_error) {
    echo "Dead";
    die("Connection failed: " . $conn->connect_error);
}

function getDataTreatment($conn,$sql)
{

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        //echcomo "connected";

        $first_row = false;

        echo '<p>';
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
                echo  '  ' . htmlspecialchars($field) ;
            }
        }

        echo '</p>';

    } else {
        echo "Wrong patient";
        //echo "<script>alert('wrong patient'); location.href='index.php';</script>";
    }
    mysqli_close($conn);
}
//mysqli_close($conn);
?>
</html>