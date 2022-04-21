<header class="header">
    <div class="container">
        <div class="nav_menu">
            <?php 
                if($login == $result['login']) {
            ?>
                <a href="#">Ссылка</a>
                <a href="#">Ссылка</a>
                <a href="#">Ссылка</a>
                <a href="admin.php" class="admin_panel"><?php echo $login?></a>
            <?php 
                }
            ?>
        </div>
        <a href="#"><?php echo 'Вы вошли как' . PHP_EOL . $login ?></a>
        <a href="index.php"> Выйти</a>
    </div>
</header>