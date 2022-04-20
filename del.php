<?php 
    error_reporting(E_ALL);
    require_once('database.php');

    if($_GET['del_id']) {
        $id = $_GET['del_id'];
        $del = mysqli_query($link ,"DELETE FROM users WHERE id = '$id'");
        if($del) {
            require_once('index.php');
        }
        else {
            echo 'не удалось удалить <a href="index.php"> На главную </a>';
        }
    }
?>