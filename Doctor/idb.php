<?php
if (isset($_POST['complain']))
{
    $complain=$_POST['complain'];
    $illness=$_POST['illness'];
    $fhistory=$_POST['fhistory'];
    $mhistory=$_POST['mhistory'];
    $dhistory=$_POST['dhistory'];
    $ihistory=$_POST['ihistory'];
    $lab=$_POST['lab'];
   // echo $complain.$illness.$fhistory.$mhistory.$dhistory.$ihistory.$lab;
    $date=date("Y-m-d");
    include 'gsearch.php';
    $values="$email";
    include 'pEmail.php';
    $pId="$P_Id";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Doctor_Patient";
    $conn = new mysqli($servername, $username, $password, $dbname);
//$email=$_POST['email'];
    $sql = "INSERT INTO treatment(Tr_Date, Tr_Complain, Tr_Illness, Tr_FHistory, Tr_MHistory, Tr_DHistory, Tr_IHistory, Tr_LInvestigation, P_Id, D_Id) VALUES (CURDATE(),'$complain','$illness','$fhistory','$mhistory','$dhistory','$ihistory','$lab','$pId','0')";
    mysqli_query($conn, $sql);
}
else {
    echo "<script>alert('error value')</script>";
}
//include "treatment.php";
header("Location: treatment.php");
exit();
?>