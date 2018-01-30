<?php

include_once 'alex/Order.php';
include_once 'john/Order.php';


use alex\Order;
use john\Order as Sorting;

//$object1 = new alex\Order();
//$object2 = new john\Order();

$object1 = new Order();
$object2 = new Sorting();


