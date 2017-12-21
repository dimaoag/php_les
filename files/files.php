<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 14.12.17
 * Time: 9:11
 */

    date_default_timezone_set("Europe/Kiev");

    $filename = 'text.txt';
    $f = fopen($filename, 'a+') or die("Error!"); //(r,r+, w,w+, a,a+, c,c+, x,x+, t,b)
    //$f = fopen('https://www.google.com.ua', 'rt') or die("Error!");

    $st = ' Hello John';
    //fwrite($f,$st);
    //fputs($f,$st);
    fclose($f);


    $f = fopen($filename, 'rt') or die("Error!");
    $res = fgets($f);
    //$res = fread($f, filesize($filename));
    fclose($f);
    echo $res . "<br>";

    echo realpath("text.txt") . "<br>";
    echo realpath(".") . "<br>";
    echo basename('/var/www/project/php_less/files/text.txt') . "<br>";
    echo dirname('/var/www/project/php_less/files/text.txt') . "<br>";


    copy('withfile', 'tofile');
    rename('oldname', 'newname');
    unlink('filename'); //delete file
    $arr = file($filename);
    print_r($arr);
    mkdir('my_dir', 0770);
    echo getcwd() . "<br>";





    $d = opendir('my_dir');
    while ($e = readdir($d)){
        if($e == '.' || $e == '..')
            continue;
        $names[] = $e;
    }
    closedir($d);
    print_r($names);
    echo "<br>";





    function printTree($level = 1){
        $d = @opendir(".");
        if (!$d) return;

        while (($e = readdir($d)) !== false){
            if($e == '.' || $e == '..')
                continue;

            if (!@is_dir($e))
                continue;

            for ($i = 0; $i < $level; $i++)
                echo " ";

            echo "$e\n";

            if (!chdir($e))
                continue;
            printTree($level + 1);

            chdir('..');

            flush();
        }

        closedir($d);
    }

    echo "<pre>";
    echo "/\n";
    chdir($_SERVER['DOCUMENT_ROOT']);
    printTree();
    echo "</pre>";


    echo date("d.m.Y - H:m:s") . "<br>";

    $timestamp = time();
    $list = getdate($timestamp);
    echo "<pre>";
    print_r($list);
    echo "</pre>";






?>