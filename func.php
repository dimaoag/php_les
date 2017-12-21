<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Func</title>
</head>
<body>
<?php
    function selectItems($items, $selected = 0){ //если $selected не придет то 0
        $text = "";

        foreach ($items as $k => $v) {
            if ($k === $selected)
                $ch = " selected";
            else
                $ch = "";

            $text .= "<option$ch value='$k'>$v</option>\n";
        }
        return $text;
    }

    $names = [
        "Weaving" => "Hugo",
        "Goddard" => "Paul",
        "Taylor" => "Robert"
    ];

    if (isset($_REQUEST['surname'])) {
        $name = $names[$_REQUEST['surname']];
        echo "You choose: {$_REQUEST['surname']}, {$name}";
    }
?>
    <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="GET">
        Choose Name:
        <select name="surname">
            <?= selectItems($names, $_REQUEST['surname'])?>
        </select><br />
        <input type="submit" value="Know surname">
    </form>

<?php
    function silly() {
        return [1, 2, 3];
    }

    $arr = silly();
    var_dump($arr);

    list ($a, $b, $c) = Silly();

    echo $a . $b . $c;

    function myecho()
    {
        for ($i = 0; $i < func_num_args(); $i++) {
            echo func_get_arg($i) . "<br />\n";
        }

        $func_nam =  func_num_args(); //возвращает общее число аргументов
        echo "<br>" . $func_nam;
        $func_nam =  func_get_arg(0); //возвращает значение  аргументa
        echo "<br>" . $func_nam;
        $func_nam =  func_get_args(); //возвращает value аргументов
        var_dump($func_nam);

    }
    myecho( "MepKYP", "BeHepa", "3eM11R", "Mapc");

    function factor($n)
    {
        if($n <= 0) return 1;
        else
            return $n * factor($n-1);
    }

    echo factor(5);

// Замикания - это функция которая запоминает состояние окружения в момент своего создания

    $arr = array(1, 2, 3, 4, 5);
    $newArr = array_map(function ($number){ return $number * 10;}, $arr);
    var_dump($newArr);


    $func2 = function (){
        echo "Hello";
    };

    $func2();

    echo "<br>";

     //генераторы

    function simple($from = 0, $to = 100){
        for($i = $from; $i < $to; $i++){
            echo "value = " . $i ."<br />";
            yield $i;
        }
    }

    foreach (simple() as $val){
        echo "Quatro = " . $val * $val . "<br />";
        if($val >= 5) break;
    }

    echo "<br>";

    function collect($arr, $callback)
    {
        foreach ($arr as $value) {
            yield $callback($value);
        }
    }

    $arr = [1, 2, 3, 4, 5, 6];
    $collect= collect($arr, function($e) { return $e * $e; });
    foreach($collect as $val) echo "$val ";


    echo "<br>";
    echo memory_get_usage(); //возвращает размер скрипта в байтах
    echo "<br>";


    function collect1($arr, $callback)
    {
        foreach ($arr as $key => $value) {
            yield $key => $callback($value);
        }
    }

    $arr =[
        "first" => 1,
        "second" => 2,
        "third" => 3,
        "fourth" => 4,
        "fifth" => 5,
        "sixth"=> 6
    ];

    $collect= collect($arr, function($e) { return $e * $e; });
    foreach($collect as $key => $val) echo "$val ($key)";

    // Строковые функции


    echo "<br>";
    $str = serialize($arr); //
    echo $str;
    echo "<br>";
    $str1 = unserialize($str);
    print_r($str1);
    echo "<br>";

    for($code = 32; $code < 128; $code++){
        //echo "code $code = " . chr($code). "<br />";
    }

    echo "<br>";

    $str = "Hello World";
    echo  strlen($str) ."<br />";
    echo  mb_strlen($str) ."<br />";

    $zero = 0;
    $one = 1;

    if($zero == "") echo "1 <br />";
    if("" == $zero) echo "2 <br />";

    $str1 = trim($str); //удаления пробелов в начале и конце
    echo strlen($str1) ."<br />";

    //int strpos(string $where, $what); //возвращает позицию нвчала what
    //int strrpos(string $where, $what); //где останий раз встречалась

    //int strcmp(string $str1, string $str2)
    // 0 = if (str1 === str2)  -1 = if (str1 < str2) 1 = if (str1 > str2)
    //int strcasecmp(string $str1, string $str2) без РЕГИСТРА

    setlocale(LC_ALL, 'ru_RU.UTF-8');

    function transliterate($st)
    {
        $st = strtr($st,
            "абвгдежзийклмнопрстуфыэАБВГДЕЖЗИЙКЛИНОПРСТУФЫЭ",
            "abvgdegziyklmnoprstufyeABVGDEGZIYKLMNOPRSTUFYE"
        );
        $st = strtr($st, array(
            'е' => "yo", 'х' => "h", 'ц' => "ch", 'ш' => "sh",
            'щ' => "shch", 'ъ' => '', 'ь' => "yu", 'я' => "ya",
            'Е' => "Yo", 'Х' => "H", 'Ц' => "Ch", 'Ш' => "Sh",
            'Щ' => "Shch", 'Ъ' => '', 'Ь' => "Yu", 'Я' => "Ya",
        ));
        return $st;
    }


    echo transliterate("У попа была собака Ежик Щас");


    //string urlencode(string $str);
    $userData = "Name Igor";
    echo "<br /><a href = 'script.php?param=".urlencode($userData)."'>Link</a>";

    $str = "HELLOO";
    echo strtolower($str) ."<br />"; //в нижний регистр
    echo strtoupper($str) ."<br />"; //в верхний регистр


    $arr = [2, 7, 3, 1, 2, 9, 4, 5];
    $arr11 = [10, 25, 20, 5];
    asort($arr); //asort($arr, SORT_NUMERIC); sort(), rsort()
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr = array_reverse($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr1 = [
        "a" => "Zero",
        "c" => "Weapon",
        "b" => "Alpha",
        "d" => "Processor"
    ];

    asort($arr1); //value;
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    $arr1 = array_reverse($arr1);
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    ksort($arr1); //key
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    natsort($arr1); //natural sort  natcasesotr() register
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    $arr1 = array_flip($arr1);
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    $arr3 = array_values($arr1); //значения в простой масив
    echo "<pre>";
    print_r($arr3);
    echo "</pre>";

    $arr4 = array_keys($arr1); //keys в простой масив
    echo "<pre>";
    print_r($arr4);
    echo "</pre>";

    // bool in_array($val, array $array) true = когда val присуствует в array
    //

    $arr5  = array_count_values($arr);
    echo "<pre>";
    print_r($arr5);
    echo "</pre>";

    $arr6 = array_merge($arr, $arr11);
    echo "<pre>";
    print_r($arr6);
    echo "</pre>";

    $arrj = [
        'employee' => 'Иванов Иван',
        'phones' => [
            '911 255 4558',
            '885 448 4793'
        ]
    ];

    //json_encode($arrj, JSON_UNESCAPED_UNICODE);

    $json = '{"employee":"Иванов Иван","phones":["911 255 4558","885 448 4793"]}';
    $arrj1 = json_decode($json,true);
    echo "<pre>";
    print_r($arrj1);
    echo "</pre>";

    echo "Hello";
    $res = round(3.414815, 3);
    echo $res . "<br>";

    echo $res = ceil(3.1) . "<br>";
    echo $res = floor(3.1) . "<br>";
    mt_rand(5, 10); //random

    $res = range(5, 10);
    //string base_convert('FF', 16, 2); //перевод системы счисления

    $min = min($arr);
    $max = max($arr);
    echo "Min = " . $min . " Max = " . $max . "<br>";

    echo  sqrt(5) . "<br>";
    echo  pow(5, 2) . "<br>";








?>
</body>
</html>