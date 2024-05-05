<?php
    //$name = $_POST['name'];
    //$email = $_POST['email'];
   // $age = $_POST['hobby'];

    //$qry = "INSERT INTO users (Name,Email,Hobby) values ('".$name."','".$email."','".$age."')";
    $qry = "insert into users(Name,Email,Hobby)values('".$_POST['name']."','".$_POST['email']."','".$_POST['hobby']."')";
    require_once ("./db.config.php");
    $dbCon = new DbCon();
    if($dbCon->UDI($qry)){
        echo "Record inserted";
    } else {
        echo "Record not inserted";
    }
    echo "<a href='./IINDEX.html'>Home</a>";

?>