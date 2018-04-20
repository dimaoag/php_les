<?php

$date = date('d.m.y');
$time = date('h.i.s');

echo $date . " " . $time;
echo "<br> <br>";

gettype($date); //вывод типа данных



//Types variables

/*  1 - integer  PHP_INT_MAX
    2 - double   1.8E+307
    3 - string
    4 - array (асоциативный масив  ключ => значения)
    5 - object (ссылка на обект)
    6 - resource (ресурс - например дескриптор открытого файла)
    7 - boolean (false = 0, "", false)
    8 - null
    9 - callable(функция обратного вызова)
*/

if(isset($date)){} //проверка существования перемены
if(!empty($date)){echo 1;}
unset($date, $time); //delete value of variables
echo "<br> <br>";

//Types variables functions
$a = 1;
is_int($a);
is_double($a);
is_string($a);
is_infinite($a);    //возвращает 1 если а бесконечное действительное число
is_nan($a);         //недопустимое числовое значение
is_numeric($a);     //число либо строковое представление числа
is_bool($a);
is_scalar($a);      //если простой тип даных
is_null($a);
is_array($a);
is_object($a);


// преобразования типов
settype($var, 'type'); //установка типа переменой
floatval($var);
strval($var);
intval($var);
gettype((int)$var);

//Ссылочные перемены

$a = 10;
$b = &$a;
$b = 2;

echo "a = $a, b = $b";  // a and b = 2
echo "<br> <br>";

$right = 'red';
$wrong = 'blue';
$color = 'right';

echo $$color;  //red
echo "<br> <br>";


//Константи

echo __FILE__ . '<br>';
echo __LINE__ . '<br>';
echo __FUNCTION__ . '<br>';
echo __CLASS__ . '<br>';
echo PHP_VERSION . '<br>';
echo PHP_OS . '<br>';
echo PHP_EOL . '<br>';

define('PI', 3.14);
echo PI .'<br>';

$a = array('a'=>'apple', 'b'=>'banana', 'c'=> array('x', 'y', 'z'));

echo '<pre>';
print_r($a);
echo '</pre>' . '<br>';

echo '<pre>';
echo "_SERVER <br>";
print_r($_SERVER);
echo '</pre>' . '<br>';

echo '<pre>';
echo "_REQUEST <br>";
print_r($_REQUEST);
echo '</pre>' . '<br>';

echo '<pre>';
echo "_COOKIE <br>";
print_r($_COOKIE);
echo '</pre>' . '<br>';


// цыкл foreach работает с копией масива
foreach ($array as $key => $value){

}

//чтобы работать с оригиналом
foreach ($array as $key => &$value){
    $value = 1885;
}

/*
require "Name file"; // если ошибка скрипт останавливается
require_once "Name file"; //choose require_once

include "Name file"; // если ошибка скрипт продолжает работать
include_once "Name file";

*/



// arrays

$names['Anderson'] = 'Thomas';
$names['Weaving'] = 'Hugo';
$names['Darrow'] = 'Geofrey';

$names = [];
$names = ['Weaving' => 'Hugo', 'Darrow' => 'Geofrey'];
$names = array('Weaving' => "Hugo", 'Darrow' => 'Geofrey');

$list = array('capter 1', 'capter 2', 'capter 3');
list($chapter1, $chapter2, $chapter3) = $list;


$f = 'Anderson';
echo $names['Weaving'] . " said: Hmm, mr. " . $names[$f] . '...';






$dossier["Anderson"] = ["name"=> "Thomas", "born"=> "1962-03-11"];
$dossier["Reeves"] = ["name" => "Keanu", "born" => "1962-09-02"];

echo '<br>';
echo $dossier['Anderson']['name'];
echo $dossier['Anderson']['born'];
echo '<br>';


echo count($dossier);


// functions array
reset($array); //[0]
end($array);
next($array);
prev($array);
current($array);  //value
key($array);

/*
int count($array)  - [nt count($array), 1] - recursive



*/

// перебор масива сзади
for (end($birth); ($k = key($birth)); prev($birth))
    echo "$k birth {$birth[$k]} <br>";

// перебор масива
for (reset($birth); ($k = key($birth)); next($birth))
    echo "$k birth {$birth[$k]} <br>";

foreach ($birth as $k => $v)
    echo "$k birth $v";





?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>


    <?php if(!isset($_REQUEST['doGo'])) {?>
        <form action="<?php echo $_SERVER['SCRIPT_NAME']?>">
            <label for="login" class="lab_login">Login: </label>
             <input class="login" type="text" name="login" value="" id="login">
            Password: <input type="password" name="password" value="">
            <select name="Sel[]" multiple>
                <option>First</option>
                <option>Second</option>
                <option>Third</option>
            </select>
            Name: <input type="text" name="Data[name]">
            <input type="radio" name="Data[city]" value="Moscow">Moscow
            <input type="radio" name="Data[city]" value="Peter">Peter
            <br>
            Programing languages:
            <input type="hidden" name="know[PHP]" value="0">
            <input type="checkbox" name="know[PHP]" value="1">PHP

            <input type="hidden" name="know[C++]" value="0">
            <input type="checkbox" name="know[C++]" value="1">C++


            <input type="submit" name="doGo" value="Click">
        </form>
    <?php } else {
        if($_REQUEST['login'] == 'root' && $_REQUEST['password']== 123){
            echo 'Access!  Welcome!';
        } else
        {
            echo 'Dancer!';
        }

        foreach ($_REQUEST['know'] as $k => $v){
            if($v) echo "You now language $k <br>";
            else echo "You don't know language $k <br>";
        }
    }
    ?>
    <h1>Auto array</h1>
    <?php  var_dump($_REQUEST['Sel']);?>
    <?php  echo $_REQUEST['Data']['name'];?>
    <?php  echo $_REQUEST['Data']['city'];?>


    <h1>Cookie</h1>
    <?php
        $count = 0;
        if(isset($_COOKIE['count'])) $count = $_COOKIE['count'];
        $count++;
        setcookie("count", $count, 0x7FFFFFFF, "/");
        echo $count;
    ?>

    <h1>_REQUEST</h1>
    <pre><?php  print_r($_REQUEST);?></pre>

    <h1>GLOBALS</h1>
    <pre><?php  print_r($GLOBALS);?></pre>
</body>
</html>
