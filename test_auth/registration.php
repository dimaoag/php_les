<?php
$db_connect = mysqli_connect('testing3.loc', 'root', '1111', 'test_auth');

if (isset($_REQUEST['sing_up'])){
    $username = mysqli_real_escape_string($db_connect, trim($_REQUEST['username']));
    $email = mysqli_real_escape_string($db_connect, trim($_REQUEST['email']));
    $password1 = mysqli_real_escape_string($db_connect, trim($_REQUEST['password1']));
    $password2 = mysqli_real_escape_string($db_connect, trim($_REQUEST['password2']));

    if (!empty($username) && !empty($email) && !empty($password1) && !empty($password2) &&
        $password1 == $password2){
        $query = "SELECT * FROM `sing_up` WHERE username = '$username' AND WHERE email = '$email'";
        $data = mysqli_query($db_connect, $query);

        if (mysqli_num_rows($data) == 0){
            $query = "INSERT INTO `sing_up` (username, email, password) VALUES ('$username','$email', SHA('$password1'))";
            mysqli_query($db_connect, $query);
            echo 'Success:)';
            mysqli_close($db_connect);
            exit();
        }else{
            echo 'Login or email is reserve!';
        }

    }

} else {
    echo 'No';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth</title>
</head>
<body>
<header>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/">News</a></li>
        <li><a href="/">Music</a></li>
        <li><a href="/">Feedback</a></li>
    </ul>
</header>
<content>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="username"> Input your login: </label>
        <input type="text" id="username" name="username" value="">
        <label for="email"> Input your email: </label>
        <input type="email" id="email" name="email" value="">
        <label for="password1"> Input your password: </label>
        <input type="password" id="password1" name="password1" value="">
        <label for="password2"> Input your password again: </label>
        <input type="password" id="password2" name="password2" value="">
        <input type="submit" name="sing_up" value="Registration">
    </form>
</content>
<footer>
    <p>All rights reserve!</p>
</footer>
</body>
</html>