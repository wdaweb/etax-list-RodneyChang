<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的發票</title>
</head>
<body>
    <?php 
        include_once("base.php"); 
    ?>

        <table>
            <tr>
            <td><a href="my_invoice.php?period=1">1～2月</td>
            <td><a href="my_invoice.php?period=2">3～4月</td>
            <td><a href="my_invoice.php?period=3">5～6月</td>
            <td><a href="my_invoice.php?period=4">7～8月</td>
            <td><a href="my_invoice.php?period=5">9～10月</td>
            <td><a href="my_invoice.php?period=6">11～12月</td>
            </tr>
        </table>
<?php
    if(!empty($_GET['period'])){
        $period=$_GET['period'];
    }else{
        exit();
    }
        $sql="SELECT `ennum`, `number`, `expend` FROM `myinvoice` WHERE period='$period'";
        $row=$pdo->query($sql)->fetchAll();

?>
    <div>
        <table>
            <tr>
                <td>發票號碼</td>
                <td>金額</td>
            </tr>
    <?php 
        foreach($row as $myinvoice){
    ?>

        <tr>
            <td> <?=$myinvoice['ennum']."-".$myinvoice['number']?> </td>
            <td> <?=$myinvoice['expend']?> </td>
        </tr>

    <?php
    }
    ?>
        </table>


    </div>


        <!-- <tr>
            <td>1,2月</td>
            <td></td>
        </tr>
        <tr>
            <td>3,4月</td>
            <td></td>
        </tr>
        <tr>
            <td>5,6月</td>
            <td></td>
        </tr>
        <tr>
            <td>7,8月</td>
            <td></td>
        </tr>
        <tr>
            <td>9,10月</td>
            <td></td>
        </tr>
        <tr>
            <td>11,12月</td>
            <td></td>
        </tr> -->
        <div>
            <tr>
                    <td>
                        <a href="index.html">回首頁</a>
                    </td>
            </tr>
        </div>
    </table>










   


</body>
</html>