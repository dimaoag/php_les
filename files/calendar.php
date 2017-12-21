<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 14.12.17
 * Time: 14:38
 */

    function makeCal($year, $month){
        $wday = date('N');

        $n = - ($wday -1);
        $cal = [];

        for ($y = 0; $y < 6; $y++){ //rows
            $row = [];
            $notEmpty = false;

            for ($x = 0; $x < 7; $x++, $n++){ //days

                if (checkdate($month, $n, $year)){
                    $row[] = $n;
                    $notEmpty = true;
                } else {
                    $row[] = "";
                }
            }

            if (!$notEmpty) break;
            $cal[] = $row;
        }

        return $cal;
    }

    $now = getdate();
    echo "<pre>";
    print_r($now);
    echo "</pre>";

    $cal = makeCal($now['year'], $now['mon']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
</head>
<body>
    <table style="border: 1px solid black">
        <tr>
            <td>Пн</td>
            <td>Вт</td>
            <td>Ср</td>
            <td>Чт</td>
            <td>Пт</td>
            <td>Сб</td>
            <td style="color: red">Вс</td>
        </tr>
        <?php foreach ($cal as $row) {?>
            <tr>
                <?php foreach ($row as $i => $v) {?>
                <td style="<?php if($i == 6) echo 'color:red'; else echo '';
                                 if($v == $now['mday']) echo 'color:green'; else echo '';?>">
                    <?= $v ? $v : "&nbsp;" ?>
                </td>
                <?php }?>
            </tr>
        <?php }?>
    </table>
</body>
</html>
