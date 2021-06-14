<?php
    // $host='localhost';//127.0.0.1
    // $db='attendence_db';
    // $user='root';
    // $pass='';
    // $charset='utf8mb4';

    //remote connection
    $host='remotemysql.com';
    $db='nWNG8eoI5t';
    $user='nWNG8eoI5t';
    $pass='chOKzmMKWz';
    $charset='utf8mb4';

    $dsn="mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo =new PDO($dsn, $user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e ){
        //echo "No database found";
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud=new crud ($pdo);
    $user=new user ($pdo);

    $user->insertUser("admin","password") ;

?>