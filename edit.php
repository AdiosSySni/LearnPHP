<?php 
    error_reporting(E_ALL);
    require_once('database.php');

    if($_GET['edit_id']) {
        $id = $_GET['edit_id'];
        $query = mysqli_query($link , "SELECT * FROM users WHERE id = '$id'");
        $result = mysqli_fetch_array($query);

        $login = $result['login'];
        $password = $result['password'];
    
    if(!empty($_POST['login']) and !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $query = mysqli_query($link, "UPDATE users SET login = '$login', password = '$password' WHERE id ='$id'");    
        // var_dump($id); 
        echo 'Данные отредактированы <a href="index.php"> На главную </a>';
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
