<?php

require_once 'classes.php';

$publications = array();

$connection = mysqli_connect('test1.loc','root', '1111', 'db_1');
mysqli_set_charset($connection, 'utf8');

if (mysqli_connect_errno()){
    echo 'Failed connect to Mysql: ' . mysqli_connect_errno();
}

$query = "SELECT * FROM `publication`;";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_array($result)){
    $publications[] = new $row['type']($row);
}

echo '<pre>';
print_r($publications);
echo '</pre>';


