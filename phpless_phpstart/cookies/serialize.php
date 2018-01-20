<?php

$arr = ['name' => 'Dima', 'surname' => 'Orikhovskyi', 'age' => 25];

$res = serialize($arr);

setcookie('name', $res);

?>