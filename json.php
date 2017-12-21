<?php
    $arr = json_decode($_POST['json'], true);

    $data = trim(implode(" ", $arr));

    $res = "Hello";

    if(!empty($data)){
        $res .= ", $data";
    }

    $res .= "!";

    echo htmlspecialchars($res);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="json.js"></script>
    <title>Json</title>
</head>
<body>
    <h1 id="answer"><?= $res ?></h1>
    <form action="json.php" method="get">
        <p>Name: <input type="text" name="name" value=""></p>
        <p>Surname: <input type="text" name="surname" value=""></p>
        <input type="submit" value="What's name">
    </form>
</body>
</html>