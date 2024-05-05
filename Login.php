<?php

$con = mysqli_connect("localhost","root","","db-project");

if(!$con)
echo"Connection Not Established";
else
echo" ";

// Assuming you have a database connection already established

$email = $_POST['email'];
$password = $_POST['password'];

// Perform database query to check if the entered credentials are valid
// Adjust the query and table/column names according to your database schema
//$query = "SELECT * FROM login WHERE email = '$email'";
$query = "Select * from login where email = '$email' and password='$password'";
$result = mysqli_query($con, $query);

if ($result && mysqli_num_rows($result) > 0) {
  $user = mysqli_fetch_assoc($result);
  $hashedPassword = md5($password);

  if ($hashedPassword == $user['password']) {
    // Login successful, redirect to another page
    //header("Location: portal.html"); // Replace "welcome.html" with the desired HTML page
    //exit();
    echo "<br> Invalid Email Or Password!";
  } else {
    // Invalid password
    echo "<br>Invalid email or password";
    header("Location: portal.html");
    exit();
  }
} else {
  // Invalid email
  echo "<br>Invalid email";
}
?>

