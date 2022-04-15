<?php

use function PHPSTORM_META\map;

    session_start();
    require 'index.html';
    // $_SESSION['test'] = 'abcd';

    // require 'index.html';
// if(isset($_GET['test']))
//     foreach($_GET['test'] as $value)
//         echo $value;

    // $arr = ['a', 'b', 'c', 'd', 'e'];
        // foreach($arr as $key => $value)
    //         echo '<a href="?par1=' . $key .'"> Cсылка' . $key . '</a>    <br/><br/>';
            
    // echo $arr[$_GET['par1']];

    // if(!isset($_SESSION['counter']))
    //     $_SESSION['counter'] = 1;
    // else 
    //     $_SESSION['counter']++;
    // if(empty($_GET))

    // if(empty($_GET))

        if(!empty($_GET['name']) and !empty($_GET['surname']))
            // echo $_GET['name'] . ' ' . $_GET['surname'];
            $_SESSION['name'] = $_GET['name'];
            $_SESSION['surname'] = $_GET['surname'];
            $_SESSION['fatherName'] = $_GET['fatherName'];

        if($_SESSION['name'] and $_SESSION['surname'])
            header("Location: /index.php");

        $sumtxt = file_get_contents('text1.txt') + file_get_contents('text2.txt');
        // echo $sumtxt;

        file_put_contents('txt/txt.txt', $sumtxt);
        // echo 'Результат сложения: ' . file_get_contents('txt/txt.txt');
        // rename('text3.txt','txt/copy.txt');
        // unlink('txt/copy.txt');

        // copy('text2.txt','txt/copy.txt');
        // unlink('text2.txt');

        // echo filesize('txt/copy.txt');

        // if(file_exists('txt/txt.txt') and filesize('txt/txt.txt') < 20480)
        //     echo file_get_contents('txt/txt.txt');
        // else 
        //     echo 'Файл превышает 20кб';

        $arr = ['one','two','three'];
        foreach($arr as $item)
            mkdir($item);
            
?>      







