<?php
    require_once('database.php');

    $query = mysqli_query($link, "SELECT * FROM users");
    
    while($result = mysqli_fetch_array($query))
        echo '<tr><td>' . $result['login'] . '</td><td>' . $result['password'] . '</td></tr>';
    echo 'table';
?>