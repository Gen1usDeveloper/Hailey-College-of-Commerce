<?php

$con = mysqli_connect("localhost","root","","record");

if(!$con)
echo('Connection Not Established');
else
echo(" ");

$q = "SELECT * FROM admission";
$result = mysqli_query($con, $q);

while ($row = mysqli_fetch_assoc($result)) {
    
    echo "Name: " . $row['Name'] . "<br>";
    echo "Father's Name: " . $row['FatherName'] . "<br>";
    echo "Date of Birth: " . $row['DOB'] . "<br>";
       echo "<br>";
}
?>