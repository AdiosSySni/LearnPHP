<?php 
    error_reporting(0);
    require_once('database.php');
    require_once('index.html');
    $query = mysqli_query($link , "SELECT * FROM users");
    $result = mysqli_fetch_array($query);
    $login = $result['login'];
?>

<wrapper class="wrapper">
    <header class="header">
        <div class="container">
            <div class="nav_menu">
                <a href="#">Ссылка</a>
                <a href="#">Ссылка</a>
                <a href="#">Ссылка</a>
                <a href=#><?php echo $login?></a>
            </div>
            <a href="index.php"> Выйти</a>
        </div>
    </header>

    <main class="main">
<?php 
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
            // var_dump($query);
            echo 'Пользователь' . ' ' . $login . ' ' . 'добавлен в базу данных <a href="index.php"> На главную </a>';
        }
    }

    if(empty($_POST['login']) or empty($_POST['password']) and !empty($_POST)) {
        echo "Заполните поля";
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

?>
    </main>

    <footer class="footer">

</footer>
</wrapper>