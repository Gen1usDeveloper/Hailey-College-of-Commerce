<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $hobby = $_POST['hobby'];
    $email = $_POST['email'];

    $qry = "UPDATE users set Name='".$name."', Email='".$email."', Hobby='".$hobby."' where id = '".$id."'";
   // $qry = "update users set Name = '".$_POST[]."'";
    require_once("./db.config.php");
    $db = new DbCon();
    if($db->UDI($qry)){
        echo 'Record updated';
    } else {
        echo 'Record not updated';
    }
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<a href="index.php">Home</a>';
?>