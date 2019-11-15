<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=invoicedb";
$pdo = new PDO($dsn, 'root', '');

// function selecAll($table){
//     global $pdo;
//     $sql ="select * from $table";
//     return $pdo->query($sql)->fetchAll();
//     }

// function selectF1($table,$period){
//     global $pdo;
//     $sql="select * from $table where period=$period";
//     return $pdo->query($sql)->fetchAll();
// }

// function selectFA($table,$period){
//     global $pdo;
//     $sql = "select * from $table where period=$period";
//     return $pdo->query($sql)->fetchAll(); 
// }


// function selectF($table,$period){
//     global $pdo;
//     $sql="select * from $table where `period`=$period";
//     return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// }

// function countIN($table,$period){
//     global $pdo;
//     $sql = "select count(*) as num from $table where `period`=$period";
//     return $pdo->query($sql)->fetch();

// }

// function insert($table,$data){

//     global $pdo;
//     $row ="`" . implode("`,`",array_keys($data))."`";
// }























?>