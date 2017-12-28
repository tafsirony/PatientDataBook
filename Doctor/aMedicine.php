<?php
$connect = mysqli_connect("localhost", "root", "", "Doctor_Patient");
//$number = count($_POST["row"]);
// Unescape the string values in the JSON array
$tableData = stripcslashes($_POST['pTableData']);

// Decode the JSON array
$tableData = json_decode($tableData,TRUE);
// now $tableData can be accessed like a PHP array
//echo $tableData[0]['name'];
$elementCount  = count($tableData);
    for($i=0;$i<$elementCount;$i++)
    {
        $name=$tableData[$i]['name'];
        $quantity=$tableData[$i]['quantity'];
        $time=$tableData[$i]['time'];
        $timeline=$tableData[$i]['timeline'];
        $sql = "INSERT INTO medicine(Pr_Id, M_Name, M_Quantity, M_Time, M_Timeline) VALUES('0',$name,$quantity,$time,$timeline)";
        $result=mysqli_query($connect, $sql);
        if($result){
            echo "success";
        }else{
            echo "error";
        }
    }
//echo $_POST['row'];
/*if($number > 0)
{
    for($i=0; $i<$number; $i++)
    {
        if(trim($_POST["name"][$i] != ''))
        {
            $sql = "INSERT INTO medicine(M_Name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";
            mysqli_query($connect, $sql);
        }
    }
    for($i=0; $i<$number; $i++)
    {
        if(trim($_POST["quantity"][$i] != ''))
        {
            $sql = "INSERT INTO medicine(M_Quantity) VALUES('".mysqli_real_escape_string($connect, $_POST["quantity"][$i])."')";
            mysqli_query($connect, $sql);
        }
    }
    for($i=0; $i<$number; $i++)
    {
        if(trim($_POST["time"][$i] != ''))
        {
            $sql = "INSERT INTO medicine(M_Time) VALUES('".mysqli_real_escape_string($connect, $_POST["time"][$i])."')";
            mysqli_query($connect, $sql);
        }
    }
    for($i=0; $i<$number; $i++)
    {
        if(trim($_POST["timeline"][$i] != ''))
        {
            $sql = "INSERT INTO medicine(M_Timeline) VALUES('".mysqli_real_escape_string($connect, $_POST["timeline"][$i])."')";
            mysqli_query($connect, $sql);
        }
    }

}
else
{
    echo "<script>alert('error')";
}
 */
?>
