<?php

sleep(2);

if (isset($_POST['name']) && isset($_POST['number'])) {
    $number = $_POST['number'];
    $name = $_POST['name'];
    echo "Name = $name; number = $number";
}





