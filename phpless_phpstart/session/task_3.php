<?php
session_start();
$answer_2 = $_REQUEST['answer_2'];

$_SESSION['answer_2'] = $answer_2;

?>
<p>Question 3:</p>
<p>4 + 4 = ?</p>
<form action="result.php" method="post">
    <input type="number" name="answer_3">
    <input type="submit" value="Next">
</form>