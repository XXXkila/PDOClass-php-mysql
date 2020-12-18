<?php
$dbq = "mysql:host=$bd_serv;dbname=$bd_name;charset=$charset";
$param = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try{
    $db = new PDO($dbq, $bd_user, $bd_pass, $param);
}
catch (PDOException $e){
    die($e->getMessage());
    echo "Ошибка: ".$e->getMessage()."<br>";
    echo "На линии: ".$e->getLine();
}
?>