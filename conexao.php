<?php


function getConnection() {
    $dsn='mysql:host=localhost;dbname=teste' ;
$user='root';
$pass= '';





try {
    
    $pdo = new pdo ($dsn,$user,$pass);
return $pdo;

} catch (PDOException $ex) {
    echo "erro:" .$ex->getMessage();
}
}