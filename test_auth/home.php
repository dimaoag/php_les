<?php
    $db_connect = mysqli_connect('testing3.loc', 'root', '1111', 'test_auth');
    if (!isset($_COOKIE['user_id'])){
        if (isset($_REQUEST['sing_in'])){
            $user_username = mysqli_real_escape_string($db_connect, trim($_REQUEST['username']));
            $user_password = mysqli_real_escape_string($db_connect, trim($_REQUEST['password']));
            if (!empty($user_username) && !empty($user_password)){
                $query = "SELECT `user_id`,`username` FROM `sing_up` WHERE username = '$user_username' AND password = SHA('$user_password')";
                $data = mysqli_query($db_connect, $query);
                if (mysqli_num_rows($data) == 1){
                    $row = mysqli_fetch_assoc($data);
                    setcookie('user_id', $row['user_id'], time()+(60*60*24*30));
                    setcookie('username', $row['username'], time()+(60*60*24*30));

                    $path = 'http://' . $_SERVER['HTTP_HOST'] . '/php_less/test_auth/home.php';
                    header("Location: ". $path);
                }else {
                    echo "Incorrect login or password";
                }
            }
        }
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
    <section>
        <?php if (empty($_COOKIE['username'])){  ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="username"> Input your login: </label>
            <input type="text" id="username" name="username" value="">
            <label for="password"> Input your password: </label>
            <input type="password" id="password" name="password" value="">
            <input type="submit" name="sing_in" value="Sing in">
            <a href="registration.php">Registration</a>
        </form>
        <?php } else {?>
            <a href="myprofile.php">My profile</a>
            <a href="logout.php">Log out</a>
        <?php }?>
    </section>
    <footer>
        <p>All rights reserve!</p>
    </footer>
</body>
</html>