<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 15.01.18
 * Time: 22:53
 */



echo "<br>";

$status = true;
$a = ($status) ? "On" : "Off";
echo $a;
echo "<br>";

$students = array(
    array('name' => "Viktor", 'age' => 75),
    array('name' => "John", 'age' => 75),
    array('name' => "Phill", 'age' => 65),
    array('name' => "Roger", 'age' => 60),
    array('name' => "Lee", 'age' => 55),
);

//for ($i = 0; $i < count($students); $i++ ){
//    echo $students[$i]['name'] .  " => " . $students[$i]['age'] . "<br>";
//}

foreach ($students as $key => $value){
    echo $value['name'] . " => " . $value['age'] .'<br>';
}

echo "<br>";

echo "<pre>";
print_r($students);
echo "</pre>";

$array = array(
    'Cars' => array(            //1
        'Bake' => array(        //2
            'Bicycles' =>array( //3
                'Extreme' => 10,//4
                'Author' => 4,  //4
            ),
            'Samocats' => 12,   //3
        ),
        'Car' => array(         //2
            'Opel' => array(    //3
                'Vivaro' => 5,  //4
            ),
            'Honda' => 10,      //3
            'Audi' => 11,       //3
        ),
        'Axesories' => 7,       //2
    ),
    'Photos' => array(          //1
        'Photo' => 6,           //2
        'Video' => 3,           //2
    ),
    'Other' => 3,               //1
);

print_r($array);

function sumRecursive($arr, $level = 0){
    static $count;
    static $items;
    if (is_array($arr)){
        $level++;
        foreach ($arr as $elem){
            sumRecursive($elem, $level);
        }
    } else {
        $count++;
        $items += $arr;
        echo $arr . "<br>";
    }
    return array('count' => $count, 'items' => $items);
}

$result = sumRecursive($array);

echo "<pre>";
print_r($result);
echo "</pre>";

$city = 'London';
$percent = 22/41 * 100;
$total = 1000;
$format = '%3$s The date statistic %.2f%% from %d people in %s';
printf($format, $percent, $total, $city);

$result = sprintf($format,$percent,$total,$city);

echo $result;
