<?php

include_once("base.php");


    $ennum = $_POST['ennum'];
    $number = $_POST['number'];
    $period = $_POST['period'];
    $expend = $_POST['expend'];
    $year = $_POST['year'];

    $sql = "insert into `myinvoice`(`ennum`, `number`, `period`,`expend`, `year`) 
    VALUES ('$ennum', '$number', '$period', '$expend', '$year')";

    $pdo->exec($sql);
 
    header("location:index.html");



?>