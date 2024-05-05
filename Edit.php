<?php
    require_once ("./db.config.php");
    require_once ("./User.php");
    $db = new DbCon();
    $users = $db->Search("Select * from users where id = '".$_GET['user_id']."'", User::class);
    if($users==null){
        die("No Record Found");
    }
    $user = $users[0];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<form action="./update.php" method="post">
    <label for="user_name">Please Enter Your Name:</label>
    <input type="text" name="name" id="user_name" value="<?php echo $user->getName() ?>" required>
    <br>
    <label for="user_email">Please Enter Your Email:</label>
    <input type="text" name="email" id="user_email" value="<?php echo $user->getEmail() ?>" required>
    <br>
    <label for="user_age">Please Enter Your HOBBY:</label>
    <input type="number" min="10" max="100" name="hobby" id="user_age" value="<?php echo $user->getAge() ?>" required>
    <br>
    <input type="text" name="id" value="<?php echo $user->getId() ?>">
    <input type="submit" value="Save User Record">
</form>
<a href="./index.php">Home</a>
</body>
</html>