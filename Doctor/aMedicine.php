<?php
$connect = mysqli_connect("localhost", "root", "", "Doctor_Patient");
$number = count($_POST["row"]);
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
