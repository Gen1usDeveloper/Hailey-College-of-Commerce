<?php
    $id = $_GET['user_id'];
    require_once ("./db.config.php");
    $dbCon = new DbCon();
    if($dbCon->UDI("Delete from users where id='".$id."'")){
        echo "Record deleted";
    } else {
        echo "Record not deleted";
    }
    echo '<a href="index.php">Home</a>'

?>