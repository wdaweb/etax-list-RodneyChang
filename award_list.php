<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        .oneline{
            border:1px solid black;
        }

        .second_line{
            border:1px solid black;
        }

    </style>
</head>
<body>
    <form action="award_start.php" method="POST">

        <table class=oneline>
            <tr>
                <td><a href="award_list.php?period=1">1-2月</td>
                <td><a href="award_list.php?period=2">3-4月</td>
                <td><a href="award_list.php?period=3">5-6月</td>
                <td><a href="award_list.php?period=4">7-8月</td>
                <td><a href="award_list.php?period=5">9-10月</td>
                <td><a href="award_list.php?period=6">11-12月</td>
            </tr>
        </table>
        <?php

        include_once "base.php";

        if(!empty($_GET['period'])){

            $period = $_GET['period'];
            $sql= "SELECT * FROM `award` WHERE `period`='$period'";
            
            $rec=$pdo->query($sql)->fetch();

        }else{
            exit();
        }

         ?>

            <table class=second_line>
                <tr>
                    <td>年度</td>
                    <td><?=$rec['year']?></td>  
                    <td>獎金</td>         
                </tr>
                <tr>
                    <td>月份</td>
                    <td><?=$rec['period']?></td>
                    <td>1000萬元</td>
                <tr>
                    <td>特別獎</td>
                    <td><?=$rec['sp1']?></td>
                    <td>1000萬元</td>
                </tr>
                </tr>
                <tr>
                    <td>特獎</td>
                    <td><?=$rec['sp2']?></td>
                    <td>200萬元</td>
                </tr>
                
                <tr>
                    <td>頭獎</td>
                    <td><?=$rec['jackpot1']?><br>
                        <?=$rec['jackpot2']?><br>
                        <?=$rec['jackpot3']?></td>
                        <td>20萬元</td>
                    </td>   
                </tr>
                
                <tr>
                    <td>二獎   末 7 位數號碼與頭獎中獎號碼末 7 位相同者</td>
                    <td>4萬元</td>
                </tr>
                <tr>
                    <td>三獎  末 6 位數號碼與頭獎中獎號碼末 6 位相同者</td>
                    <td>1萬元</td>
                </tr>
                <tr>
                    <td>四獎  末 5 位數號碼與頭獎中獎號碼末 5 位相同者</td>
                    <td>4千元</td>
                </tr>
                <tr>
                    <td>五獎  末 4 位數號碼與頭獎中獎號碼末 4 位相同者</td>
                    <td>1千元</td>
                </tr>
                <tr>
                    <td>六獎  末 3 位數號碼與頭獎中獎號碼末 3 位相同者</td>
                    <td>2百元</td>
                </tr>
            
                <tr>
                    <td>增開六獎</td>
                    <td><?=$rec['six1']?><br>
                        <?=$rec['six2']?><br>
                        <?=$rec['six3']?></td>
                    <td>2百元</td>
                </tr>
                
            </table>

            <input type="hidden" id='year' name='year' value="<?=$rec["year"]?>">
            <input type="hidden" id='period' name='period' value="<?=$rec["period"]?>">
            <input type="hidden" id='sp1' name='sp1' value="<?=$rec["sp1"]?>">
            <input type="hidden" id='sp2' name='sp2' value="<?=$rec["sp2"]?>">
            <input type="hidden" id='jackpot1' name='jackpot1' value="<?=$rec["jackpot1"]?>">
            <input type="hidden" id='jackpot2' name='jackpot2' value="<?=$rec["jackpot2"]?>">
            <input type="hidden" id='jackpot3' name='jackpot3' value="<?=$rec["jackpot3"]?>">
            <input type="hidden" id='six1' name='six1' value="<?=$rec["six1"]?>">
            <input type="hidden" id='six2' name='six2' value="<?=$rec["six2"]?>">
            <input type="hidden" id='six3' name='six3' value="<?=$rec["six3"]?>">
           
            <?php

            if(!empty($_GET['period'])){
                if(empty($rec['six1'])){
                    echo "<span>未開獎</span>";   
                }else{
                    echo "<input type='submit' value='兌獎'>";
                }
            }
?>
</form>   
</body>
</html>