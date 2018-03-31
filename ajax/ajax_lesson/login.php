<?php
sleep(2);
if (isset($_POST['login'])) {
    $login = trim($_POST['login']);

    if ($login == 'admin')
        echo 'fail';
    else
        echo 'success';
}
