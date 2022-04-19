<?php 
require_once('database.php');

if($_GET['del_id']){
    $id = $GET['del_id'];
    $del = mysqli_query($connect,"DELETE FROM users WHERE id = '$id'");
    if($del){
        require_once('datavase.php');
    }
    else{
        echo 'неудалось удалить <a href = "database.php"> На главную</a>';
    }
}






?>