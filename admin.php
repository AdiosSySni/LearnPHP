<?php 
    error_reporting(0);
    require_once('database.php');
    require_once('index.html');
    $query = mysqli_query($link , "SELECT * FROM users");
    $result = mysqli_fetch_array($query);
    $login = $result['login'];
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
                <a href="admin.php"><?php echo $login?></a>
            </div>
            <a href="#"><?php echo 'Вы вошли как' . PHP_EOL . $login ?></a>
            <a href="index.php"> Выйти</a>
        </div>
    </header>

   

    <main class="main">
    <?php 
             $queryLogin = mysqli_query($link, "SELECT * FROM users");

                echo '<table border = 1> <tr><th>Login</th> <th>Password</th> <th>Delete</th> <th>Edit</th> </tr>';
                while($resultLogin = mysqli_fetch_array($queryLogin)) {
                    echo '<tr><td>'.$resultLogin['login'].'</td><td>'
                    .$resultLogin['password'].'</td><td><a href=del.php?del_id='.$resultLogin['id']
                    .'>Delete</a></td><td><a href=edit.php?edit_id='.$resultLogin['id'].'>Edit</a></td></tr>';
                }
                echo '</table>';
                echo '<a href="insert.php"> Добавить </a> <br>';
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