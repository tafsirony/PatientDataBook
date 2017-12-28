<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Doctor_Patient";
    $connect = new mysqli($servername, $username, $password, $dbname);
    $medicine=$_GET['medicine_name'];
    $quantity=$_GET['medicine_quantity'];
    $time=$_GET['medicine_time'];
    $timeline=$_GET['medicine_timeline'];
    $prescription=$_GET['prescription_id'];
    $sql="INSERT INTO table_name (Pr_Id, M_Name, M_Quantity,M_Time,M_Timeline) VALUES ('$prescription', '$medicine', '$quantity', '$time', '$timeline')";
    $number = count($_POST["name"]);
    if($number > 0)
    {
        for($i=0; $i<$number; $i++)
        {
            if(trim($_POST["name"][$i] != ''))
            {
                $sql = "INSERT INTO medicine(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";
                mysqli_query($connect, $sql);
            }
        }
        echo "Data Inserted";
    }
    else
    {
        echo "Please Enter Name";
    }
?>