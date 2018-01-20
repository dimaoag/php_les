<?php

$connection = mysqli_connect('test1.loc','root', '1111', 'db_1');
mysqli_set_charset($connection, 'utf8');

if (mysqli_connect_errno()){
    echo 'Failed connect to Mysql: ' . mysqli_connect_errno();
}

//$query = "INSERT INTO `news_category` VALUES(NULL,'sport2','sport2222 is power',1,1);";
//$query = "INSERT INTO news VALUES(NULL,'title1','1','1','1','1', CURRENT_TIMESTAMP,'1','1');";
//$query = "UPDATE news SET status = '0';";

$query = "SELECT * FROM news;";
$info = mysqli_query($connection,$query); // выполнения запроса;

$count = mysqli_num_rows($info); // сколько записей мы получили;

while ($row = mysqli_fetch_array($info)){
    echo '<h1>';
    echo $row['h1'];
    echo '</h1>';
}




echo mysqli_affected_rows($connection); // int - сколько запесей было изменено;



?>