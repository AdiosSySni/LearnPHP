<wrapper> 
    <header>
        <div class="header_content">
            <div class="nav_menu">
                <a href="#" id="nav_point"></a>
                <a href="#" id="nav_point"></a>
                <a href="#" id="nav_point"></a>
                <a href="#" id="nav_point"></a>
            </div>
            
            <form action="" method="post">
                <label> <input type="name" name="login" placeholder="Имя" required class="inputName"> </label>
                <label> <input type="password" name="password" placeholder="Пароль" required class="inputPass"> </label>
                <input type="submit" value="Войти" id="button">
            </form>
              <p id = "userName" ></p>
              <a href="index.php" id="exit" >Выйти</a>
        </div>
    </header>


    <main> 
<?php
    // require_once('index.html');
    error_reporting(E_ALL);
    require_once('database.php');
    if(empty($_POST))  {
?>
        

<?php 

        $query = mysqli_query($link, "SELECT * FROM users");
        echo '<table border = 1> <tr><th>Name</th> <th>Passowrd</th><tr>';

        while($result = mysqli_fetch_array($query)) {
            echo '<tr> <td>'.$result['login'] . '</td> <td>' . $result['password'] . '</td> </tr>';
        }
            echo '</table>';
    }

    if(!empty($_POST['login']) and !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $query = mysqli_query($link, "SELECT * FROM users WHERE login = '$login' AND password = '$password' ");
        $result = mysqli_fetch_array($query);

        if($login == $result['login']) {
            echo 'Вы вошли как ' . PHP_EOL . $login . PHP_EOL . '<a href="index.php"> Выйти <a>';
            echo '<br>';

            $queryLogin = mysqli_query($link, "SELECT * FROM users");
            echo '<a href="insert.php"> Добавить </a> <br> 
            <table border = 1> <tr><th>Login</th> <th>Password</th> <th>Delete</th> <th>Edit</th> </tr>';
            while($resultLogin = mysqli_fetch_array($queryLogin)) {
                echo '<tr><td>'.$resultLogin['login'].'</td><td>'
                .$resultLogin['password'].'</td><td><a href=del.php?del_id='.$resultLogin['id']
                .'>Delete</a></td><td><a href=edit.php?edit_id='.$resultLogin['id'].'>Edit</a></td></tr>';
            }
        }
            echo '</table>';

        if($login != $result['login']) {
            echo 'Логин и пароль неверные <a href="index.php"> Назад </a>';
            echo '<br><br>';
            
            $queryLogin = mysqli_query($link,"SELECT * FROM users");
            echo'<table border = 1><tr><th>Login</th><th>Password</th></tr>';
            while($resultLogin = mysqli_fetch_array($queryLogin)){
                echo'<tr><td>'.$resultLogin['login'].'</td><td>'.$resultLogin['password'].'</td></tr>';
            } 
            echo '</table>';
        }    
    }
?>
    </main>
    <footer>
       
    </footer>
</wrapper>

<style>
    *, html, body{
        margin: 0 ;
        padding: 0;
    }

  
    wrapper {
        min-height: 100%;
        display: flex;
        flex-direction: column;
    }

    header{
        height: 100px;
        background-color: aqua;
    }

    .header_content {
        height:100%;
        width:1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    input {
        width:140px;
    }

    #button {
        width:60px;
    }

    .nav_menu {
        height:100%;
        width:600px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #nav_point {
        width:100px;
        height:40px;
        background:white;
        border:1px solid black;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
    }

    .hide {
        display: none;
    }

    main{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        flex: 1 1 auto;
    }
    
    footer{
        height: 100px;
        background-color: aqua;
    }
</style>

<script>
   let inputName = document.querySelector('.inputName'),
   inputPass = document.querySelector('.inputPass'),
   button = document.querySelector('#button'),
   userName = document.querySelector('#userName'),
   exit = document.querySelector('#exit');

   button.addEventListener('click', ()=> {
    //    console.log(inputName.value);
    //    console.log(inputPass.value);

       inputName.classList.add('hide');
       inputPass.classList.add('hide');
       button.classList.add('hide');

       userName.classList.remove('hide');
       
       userName.innerHTML = '<?php echo $login ?>';

       exit.classList.remove('hide');

    })
</script>
        

    
    
