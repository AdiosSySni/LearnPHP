<?php
    // require_once('index.html');
    error_reporting(E_ALL);
    require_once('database.php');

    if(empty($_POST))  {
?>      
        <form action="" method="post">
            <label>Имя <input type="name" name="name" required> </label>
            <label>Пароль <input type="password" name="password" required> </label>
            <input type="submit" value="Войти">
        </form>
<?php

    }

    $query = mysqli_query($connect, "SELECT * FROM users");
        echo '<table border = 1> <tr><th>Name</th> <th>Passowrd</th><tr>';

    while($result = mysqli_fetch_array($query)) {
        echo '<tr> <td>'.$result['name'] . '</td> <td>' . $result['password'] . '</td> </tr>';
    }
        echo '</table>';

    if(!empty($_POST['name']) and !empty($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        
        $query = mysqli_query($connect, "SELECT * FROM users WHERE name = '$name' AND password = '$password' ");
        
        $result = mysqli_fetch_array($query);
        if($name == $result['name']) {
            echo ' Вы вошли как' .  PHP_EOL . $name . PHP_EOL . '<a href="index.php"> Выйти </a>';
            echo '<br><br>';
        }
        
        $queryName = mysqli_query($connect, "SELECT * FROM users");
        echo '<a href="insert.php"> Добавить </a> <br> 
        <table border = 1> <tr><th>Login</th> <th>Password</th> <th>Delete</th> <th>Edit</th> </tr>';
        while($resulName = mysqli_fetch_array($queryName)) {
            echo '<tr><td>'. $resultName['name'] . '</td><td> <a href="delete.php?del_id="' . 
            $resultName['id'] . '>Delete</a></td> <td> <a href = "edit.php?edit_id="' . $resultName['id'] . '>Edit</a></td></tr>'; 
        }
        echo '</table>';
    }

        if($name != $result['login']) {
            echo 'Логин и пароль неверные <a href="index.php"> Назад </a>';
        }

    
    
