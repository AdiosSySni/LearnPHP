<?php 
    error_reporting(0);
    require_once('database.php');
    require_once('index.html');
?>

<wrapper class="wrapper">
    <?php
        if(empty($_POST))  {
        
    ?>
    <header class="header">
        <div class="container">
            <div class="nav_menu">
                <a href="#">Ссылка</a>
                <a href="#">Ссылка</a>
                <a href="#">Ссылка</a>
                <a href="admin.php" class="admin_panel">Ссылка</a>
            </div>
        
            <form action="" method="post">
                <label> <input type="name" name="login" placeholder="Имя" required class="inputName"> </label>
                <label> <input type="password" name="password" placeholder="Пароль" required class="inputPass"> </label>
                <input type="submit" value="Войти" id="button">
            </form> 
        </div>
    </header>

   

    <main class="main">
    <?php 
            // $query = mysqli_query($link, "SELECT * FROM users");
            // echo '<table border = 1> <tr><th>Name</th> <th>Password</th><tr>';
            // while($result = mysqli_fetch_array($query)) {
            //     echo '<tr> <td>'.$result['login'] . '</td> <td>' . $result['password'] . '</td> </tr>';
            // }
            //     echo '</table>';
                // echo '<a href="insert.php"> Добавить </a> <br>';
        }

        if(!empty($_POST['login']) and !empty($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $query = mysqli_query($link, "SELECT * FROM users WHERE login = '$login' AND password = '$password' ");
            $result = mysqli_fetch_array($query);

            if($login == $result['login']) {
                
                // echo '<br>';
                require __DIR__ . '/header.php';

                
    ?>  
    
    <main class="main">

    <?php
            echo 'Вы вошли как ' . PHP_EOL . $login;
                // $queryLogin = mysqli_query($link, "SELECT * FROM users");

                // echo '<table border = 1> <tr><th>Login</th> <th>Password</th> <th>Delete</th> <th>Edit</th> </tr>';
                // while($resultLogin = mysqli_fetch_array($queryLogin)) {
                //     echo '<tr><td>'.$resultLogin['login'].'</td><td>'
                //     .$resultLogin['password'].'</td><td><a href=del.php?del_id='.$resultLogin['id']
                //     .'>Delete</a></td><td><a href=edit.php?edit_id='.$resultLogin['id'].'>Edit</a></td></tr>';
                // }
                // echo '</table>';
                // echo '<a href="insert.php"> Добавить </a> <br>';
            }


            // if($login != $result['login']) {
            //     echo 'Логин и пароль неверные <a href="index.php"> Назад </a>';
                // echo '<br><br>';
                
                // $queryLogin = mysqli_query($link,"SELECT * FROM users");
                // echo'<table border = 1><tr><th>Login</th><th>Password</th></tr>';
                // while($resultLogin = mysqli_fetch_array($queryLogin)){
                //     echo'<tr><td>'.$resultLogin['login'].'</td><td>'.$resultLogin['password'].'</td></tr>';
                // } 
                // echo '</table>';
            // }    

            if($login != $result['login']) {
?>
                <header class="header">
                    <div class="container">
                        <div class="nav_menu">
                            <a href="#">Ссылка</a>
                            <a href="#">Ссылка</a>
                            <a href="#">Ссылка</a>
                            <a href="#">Ссылка</a>
                        </div>
                        <a href="index.php"> На главную</a>
                    </div>
                </header>
                <main class="main">
                    <p>Вы ввели не правильный логин или пароль</p>
                </main>
                <?php
            }
        }
?>
    </main>

    <footer class="footer">

    </footer>
</wrapper>

