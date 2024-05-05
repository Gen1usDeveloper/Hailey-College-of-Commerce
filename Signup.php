<?php

$con = mysqli_connect("localhost","root","","signup");

if(!$con)
echo"Connection Not Established";
else
echo" ";

$Q = "INSERT INTO `user` (Email, Password) VALUES ('" . $_POST['email'] . "', '" . md5($_POST['password']) . "')";

if (mysqli_query($con, $Q)) {
    echo ' ';
} else {
    echo 'Data Not Inserted';
}

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
        <p>Your Account has been Created.</p>
    </div>
</body>
</html>

