<?php
if (isset($_POST['complain']))
{
    $complain=$_POST['complain'];
    $illness=$_POST['illness'];
    $fhistory=$_POST['fhistory'];
    $mhistory=$_POST['mhistory'];
    $dhistory=$_POST['dhistory'];
    $ihistory=$_POST['ihistory'];
    $date=date("Y-m-d");
    include 'gsearch.php';
    $values="$email";
    include 'pEmail.php';
    $pId="$P_Id";
    // Instructions if $_POST['value'] exist
}
else {
    echo "<script>alert('error value')</script>";
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Doctor_Patient";
$conn = new mysqli($servername, $username, $password, $dbname);
//$email=$_POST['email'];
$sql = "INSERT INTO treatment(P_Id, Tr_Date, Tr_Complain, Tr_Illness, Tr_FHistory, Tr_MHisotry, Tr_DHistory, Tr_IHistory, Tr_LHistory) VALUES ('$pId',CURDATE(),'$complain','$illness','$fhistory','$mhistory','$dhistory','$ihistory') ";
mysqli_query($conn, $sql);
include "treatment.php";
//header("Location: treatment.php");
//exit();
?>