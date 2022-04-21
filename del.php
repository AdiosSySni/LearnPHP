<?php 
    error_reporting(E_ALL);
    require_once('database.php');
    require_once('index.html');
    $query = mysqli_query($link , "SELECT * FROM users");
    $result = mysqli_fetch_array($query);
    $login = $result['login'];
?>

<div class="wrapper">
    <header class="header"> 
        <div class="container">
            <div class="nav_menu">
                <a href="#">Ссылка</a>
                <a href="#">Ссылка</a>
                <a href="#">Ссылка</a>
                <a href="#" class="admin_panel"><?php echo $login?></a>
            </div>
            <a href="#" class="login_name"><?php echo 'Вы вошли как' . PHP_EOL . $login ?></a>
            <a href="index.php"> Выйти</a>
        </div>
    </header>

    <main class="main">
<?php 
    

    if($_GET['del_id']) {
        $id = $_GET['del_id'];
        $del = mysqli_query($link ,"DELETE FROM users WHERE id = '$id'");
        if($del) {
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
        else {
            echo 'не удалось удалить <a href="index.php"> На главную </a>';
        }
    }
?>
    </main>

    <footer class="footer">

    </footer>
</div>

