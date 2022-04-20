<?php 
   error_reporting(E_ALL);
   require_once('database.php');

 
    if(!empty($_POST['name']) and !empty($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $select = mysqli_query($connect, "SELECT name FROM users WHERE name = '$name'");

        $resultSelect = mysqli_fetch_array($select) ;
            
        if($name == $resultSelect('name')) {
            echo 'Пользователь с такми именем уже существует <a href="index.php">Удалить</a>';
        }
        if($name != $resultSelect('name')) {
            $query = mysqli_query($link, "INSERT INTO users SET name = '$name' , password = '$password'");
            echo 'Пользователь' . $name . ' добавлен в базу';
            echo '<br><a href= "index.php"> На главную </a>';
        }
    }

    if((empty($_POST['name']) or empty($_POST['password']) and !empty($_POST))) {
        echo 'Не заполнены поля <a href="index.php">На главную</a>';
    }
    if(empty($_POST['name']) or empty($_POST['password'])) {
?>
        <form action="" method="post">
            <label>Имя <input type="name" name="name" required> </label>
            <label>Пароль <input type="password" name="password" required> </label>
            <input type="submit" value="Добавить">
        </form> 
<?php
    }
    

