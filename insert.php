<?php

include 'db.php';

$name=$_POST['name'];
$father=$_POST['father_name'];
$cnic=$_POST['cnic'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$issue=$_POST['issue_date'];
$expiry=$_POST['expiry_date'];

$sql="INSERT INTO students(name,father_name,cnic,dob,address,issue_date,expiry_date)
VALUES('$name','$father','$cnic','$dob','$address','$issue','$expiry')";

if($conn->query($sql)==TRUE)
{
    echo "<script>
    alert('Data Inserted Successfully');
    window.location='index.php';
    </script>";
}
else
{
    echo "Error: " . $conn->error;
}