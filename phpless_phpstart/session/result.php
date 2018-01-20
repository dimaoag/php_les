<?php
session_start();

$answer_1 = $_SESSION['answer_1'];
$answer_2 = $_SESSION['answer_2'];
$answer_3 = $_REQUEST['answer_3'];


if (($answer_1 == 4) && ($answer_2 == 6) && ($answer_3 == 8)){
    echo 'Success';
}
else {
    echo 'Error';
}

echo session_id();
echo session_name();

?>