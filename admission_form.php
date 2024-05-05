<?php

$con = mysqli_connect("localhost","root","","record");

if(!$con)
echo('Connection Not Established');
else
echo(" ");
 $q = "insert into admission(Name,FatherName,DOB,Ph,Gender,BloodGroup,Religion,Nationality,Email,ID,PresentAddress,PermanentAddress,Examination,Board,RollNo,Result,subject,PassingYear,Degree,BISE,ExamID,obtNUM,course,year)values('".$_POST['applicant_name']."','".$_POST['father_name']."','".$_POST['dob']."','".$_POST['ph']."','".$_POST['gender']."','".$_POST['religion']."','".$_POST['blood_group']."','".$_POST['nationality']."','".$_POST['email']."','".$_POST['national_id']."','".$_POST['present_address']."','".$_POST['permanent_address']."','".$_POST['ssc_exam_type']."','".$_POST['ssc_board']."','".$_POST['ssc_roll_no']."','".$_POST['ssc_result']."','".$_POST['ssc_group']."','".$_POST['ssc_pass_year']."','".$_POST['hsc_exam_type']."','".$_POST['hsc_board']."','".$_POST['hsc_roll_no']."','".$_POST['hsc_result']."','".$_POST['hsc_group']."','".$_POST['hsc_pass_year']."')"; 

 if(mysqli_query($con,$q))
 echo(" ");
 else("Record Not Inserted");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
        }
        
        .thank-you-message {
            margin-top: 200px;
            font-size: 24px;
            color: #333;
        }
        
        .thank-you-image {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="thank-you-message">
        <h1>Thank You!</h1>
        <p>Your submission has been received.</p>
    </div>
</body>
</html>

