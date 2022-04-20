<?php 
    error_reporting(E_ALL);
    require_once('database.php');

    if(!empty($_POST['login']) and !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $select = mysqli_query($link, "SELECT * FROM users WHERE login = '$login' AND password = '$password'");
        $resultSelect = mysqli_fetch_array($select);

        if($login == $resultSelect['login']) {
            echo 'Пользователь с таким именем уже существует <a href="index.php"> Назад </a>';
        }
        if($login != $resultSelect['login']) {
            $query = mysqli_query($link, "INSERT INTO users SET login ='$login' , password='$password'");
            var_dump($query);
            echo 'Пользователь' . ' ' . $login . ' ' . 'добавлен в базу данных <a href="index.php"> На главную </a>';
        }
    }

    if(empty($_POST['login']) or empty($_POST['password']) and !empty($_POST)) {
        echo 'Поля не заполнены <a href="index.php"> На главную </a>';
    }

    if(empty($_POST['login']) or empty($_POST['password'])) {
?>
        <form action="" method="post">
            <label>Имя <input type="name" name="login" required> </label>
            <label>Пароль <input type="password" name="password" required> </label>
            <input type="submit" value="Добавить">
        </form>
<?php
}

   
    

