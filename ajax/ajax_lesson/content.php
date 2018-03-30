<?php

sleep(2);

if (isset($_POST['name']) && isset($_POST['number'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    echo "Name = $name; number = $number";
}