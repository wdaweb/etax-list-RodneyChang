<?php

    include_once "base.php";

    $year=$_POST['year'];
    $period=$_POST['period'];
    $sp1=$_POST['sp1'];
    $sp2=$_POST['sp2'];
    $jackpot1=$_POST['jackpot1'];
    $jackpot2=$_POST['jackpot2'];
    $jackpot3=$_POST['jackpot3'];
    $six1=$_POST['six1'];
    $six2=$_POST['six2'];
    $six3=$_POST['six3'];
    
    $period = $_POST['period'];
    $sql="SELECT * FROM `myinvoice` WHERE `period`='$period'";
    
    $data=$pdo->query($sql)->fetchAll();

    foreach($data as $invoice){

        if($invoice['number'] == $_POST['$sp1']){
            echo "恭喜獲得1000萬";
            echo $invoice['num'];
        }else if($invoice['number'] == $_POST['$sp2']){
            echo"恭喜獲得200萬";
            echo $invoice['num'];
        }else if ($invoice['number'] == $_POST['jackpot1']){
            echo "恭喜獲得20萬元";
            echo $invoice['num'];
        }else if($invoice['number'] == $_POST['jackpot1']){
            echo "恭喜獲得20萬元";
            echo $invoice['num'];
        }else if($invoice['number'] == $_POST['jackpot2']){
            echo "恭喜獲得20萬元";
            echo $invoice['num'];
        }else if($invoice['number'] == $_POST['jackpot3']){
            echo "恭喜獲得20萬元";
            echo $invoice['num'];
        }else if(substr($invoice['num'],1,7) == substr($_POST['jackpot1'],1,7)
        || substr($invoice['num'],1,7) == substr($_POST['jackpot2'],1,7) || substr($_POST['jackpot3'],1,7){
            echo "恭喜獲得4萬元";
        }else{
            echo "未中獎";
        }
    }

    //智慧財產 來源自：志祥 ＆ 啟祥 
?>

<!-- 
    <div>年份：</div>
    <div>期別：</div>
    <div>發票總數：</div>
    <h3>發票總數：</h3>

    <table>
        <tr>
            <td>中獎發票</td>
            <td>中獎金額</td>
        </tr>
    </table> -->