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
                <a href="admin.php"><?php echo $login?></a>
            </div>
            <a href="#"><?php echo 'Вы вошли как' . PHP_EOL . $login ?></a>
            <a href="index.php"> Выйти</a>
        </div>
    </header>
  
<?php 
    if($_GET['edit_id']) {
        $id = $_GET['edit_id'];
        $query = mysqli_query($link , "SELECT * FROM users WHERE id = '$id'");
        $result = mysqli_fetch_array($query);
        $login = $result['login'];
        $password = $result['password'];
?>
     

    <main class="main">
<?php
        
    
    if(!empty($_POST['login']) and !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $query = mysqli_query($link, "UPDATE users SET login = '$login', password = '$password' WHERE id ='$id'");    
        // var_dump($id); 
        // echo 'Данные отредактированы <a href="index.php"> На главную </a>';

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

    if(empty($_POST['login']) or empty($_POST['password'])){
?>
        <form action="" method="post">
            <input placeholder="login" name="login" value="<?php echo $login ?>">
            <input placeholder="password" name="password" value="<?php echo $password ?>">
            <input type="submit" value="Обновить">
        </form>
<?php
    } 
}
?>

    </main>

    <footer class="footer">

    </footer>
</div>