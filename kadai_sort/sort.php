<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

            function sort_2way ($array,$order) {
                if ($order == "true") {
                    sort($array);
                } else if ($order == "false") {
                    rsort($array);
                }
                return $array;
            }

            $nums = [15, 4, 18, 23, 10 ];

            //昇順に並べる時
            echo"昇順に並べます。<br>";
            $sorted_nums_true = sort_2way($nums, "true");
            foreach ($sorted_nums_true as $num) {
                echo $num . "<br>";
            }

            // 降順に並べる時
            echo "降順に並べます。<br>";
            $sorted_nums_false = sort_2way($nums, "false");
            foreach ($sorted_nums_false as $num) {
                echo $num . "<br>";
            }

        ?>


    </p>
</body>

</html>