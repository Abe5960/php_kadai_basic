<!DOCTYPE>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_005</title>
</head>

<body>
    <p>
        <?php
        $score_01 = 80;
        $score_02 = 60;
        $score_03 = 55;
        $score_04 = 40;
        $score_05 = 100;
        $score_06 = 25;
        $score_07 = 80;
        $score_08 = 95;
        $score_09 = 30;
        $score_10 = 60;
        echo $score_01 + $score_02 + $score_03 + $score_04 + $score_05 + $score_06 +$score_07 + $score_08 + $score_09 + $score_10;
        
        $sum = $score_01 + $score_02 + $score_03 + $score_04 + $score_05 + $score_06 +$score_07 + $score_08 + $score_09 + $score_10;
        echo '<br>';
        echo $sum / 10 
        ?>
    </p>
</body>
</html>