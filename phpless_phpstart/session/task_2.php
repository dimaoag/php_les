<?php
session_start();
$answer_1 = $_REQUEST['answer_1'];

$_SESSION['answer_1'] = $answer_1;

?>
<p>Question 2:</p>
<p>3 + 3 = ?</p>
<form action="task_3.php" method="post">
    <input type="number" name="answer_2">
    <input type="submit" value="Next">
</form>