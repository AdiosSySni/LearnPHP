<?php
   
    $connect = mysqli_connect('127.0.0.1','root', '', 'test') or 
    die('Ошбика подключения к базе данных' . mysqli_error('database.php'));
    
    // var_dump($connect);
    // if ($connect === false) {
    //     die("Ошибка: " . mysqli_connect_error());
    //   } 
    //   echo "Подключение успешно установлено";
    //   mysqli_close($connect);
    
?>