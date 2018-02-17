<?php

require_once 'ResizeClass.php';

/*

$option =
'width'
'height'
'auto'
'crop'
'exact'



*/


try{
    $obj = new ResizeClass('source/1.jpg');
    $obj->resize(150, 80, 'exact');

} catch (Exception $e){

    echo $e->getMessage();

}

?>