<header class="header">
    <div class="container">
        <div class="nav_menu">
            <?php 
                if($login == $result['login']) {
            ?>
                <a href="#">Ссылка</a>
                <a href="#">Ссылка</a>
                <a href="#">Ссылка</a>
                <a href=#><?php echo $login?></a>
            <?php 
                }
            ?>
        </div>
        <a href="index.php"> Выйти</a>
    </div>
</header>