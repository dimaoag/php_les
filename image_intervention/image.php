<?php

require_once 'ResizeClass.php';

/*
$option =
'width'
'height'
'auto'
'crop'  //обрезка краев
'exact' //статика
*/


try{
    $obj = new ResizeClass('source/1.jpg');
    $obj->resize(70, 180, 'crop');
    $obj->save('112.jpg',100);

} catch (Exception $e){

    echo $e->getMessage();

}

?>