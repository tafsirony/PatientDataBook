<html>
<?php
//include "prescription.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);

//$email=$_POST['email'];
$sql = "SELECT search FROM search";
getSearchData($conn,$sql);
if ($conn->connect_error) {
    echo "Dead";
    die("Connection failed: " . $conn->connect_error);
}

function getSearchData($conn,$sql)
{
   global $email;
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
                $email = htmlspecialchars($field);
                //echo $email;
            }
            echo '</tr>';
        }
       // echo $email;
        return $email;

    } else {
        //echo "<script>alert('wrong patient'); location.href='index.html';</script>";
    }
    mysqli_close($conn);

}
?>
</html>