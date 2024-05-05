<?php
define('DSN','mysql:host=localhost;dbname=PDO');
define('userName','root');
define('password','');
define('debugging','true');
class DbCon{
    private $pdo;
    public function __construct()
    {
        try{
            $this->pdo = new PDO(DSN,userName,password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            if(debugging==true){
                echo "Error:".$e;
            } else {
                echo "Error happened please try later again.";
            }
        }
    }

    public function UDI($qry){
        return $this->pdo->exec($qry);
    }

    public function Search($qry, $classRef){
        $result = $this->pdo->query($qry);
        if($result->rowCount() > 0){
            return $result->fetchAll(PDO::FETCH_CLASS, $classRef);
        }
        return null;
    }
}
////    echo '<pre>';
////    print_r(PDO::getAvailableDrivers());
////    echo '</pre>';
//    define('DSN','mysql:host=localhost;dbname=3mcssp21');
//    define('userName','root');
//    define('password','123');
//    define('debugging','true');
////    $DSN = 'mysql:host=localhost;dbname=3mcssp21';
////    $username = 'root';
////    $password = '123';
////    $debugging = true;
//
//
//
//    try{
//        $pdo = new PDO(DSN,userName,password);
//        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    } catch (PDOException $e){
//        if(debugging==true){
//            echo "Error:".$e;
//        } else {
//            echo "Error happened please try later again.";
//        }
//    }

//    $result = $pdo->query("SELECT * FROM `users`");
//    if($result->rowCount()>0){
//        $rows = $result->fetchAll(PDO::FETCH_CLASS, User::class);
////        echo '<pre>';
////            print_r($row);
////        echo '</pre>';
//
//        foreach($rows as $user){
//            echo $user->getDetail();
//        }
//    } else {
//        echo 'no record found';
//    }

?>