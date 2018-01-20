<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 19.01.18
 * Time: 20:50
 */

$string = 'This is smart student 22';
//$pattern = '/is/'; //word
//$pattern = '/2000/'; //number
//$pattern = '/200[0-5]/'; //остання цифра в диапазони
//$pattern = '/200[5,7,9]/'; //остання цифра aбо
//$pattern = '/[0-9][0-9][0-9][0-9]/'; //[0 - 9999]
//$pattern = '/p{3}/'; //три подряд р  ->(ppp)
//$pattern = '/p{3,5}/'; //в диапазони подряд р  ->(3-5)
//$pattern = '/p{1,}/'; //в диапазони от 1 и больше
//$pattern = '/[0-9]{2}/'; //две цыфры подряд
$pattern = '/[0-9]{2}/'; //две цыфры подряд





$result = preg_match($pattern, $string);

echo $result;