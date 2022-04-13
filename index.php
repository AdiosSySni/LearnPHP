<?php
session_start();
// echo $_SESSION['test'];
if(!empty($_SESSION))
    foreach($_SESSION as $item)
        echo $item . ' ';

// echo $_SESSION['surname'] . ' ' . $_SESSION['name'];


    // echo ($_GET['test1'] + $_GET['test2'] + $_GET['test3']);
// $pass = 123;

// if(empty($_GET)) 
//     echo ('Введите пароль');
//     else 
//         if($pass == $_GET['password']) 
//             echo ('Верный пароль'.'<br>' . 'Имя пользователя: ' . $_GET['name']);
//         else 
//             echo ('Пароль не верный');

// require('index.html');

// if(!empty($_GET)) {
//     if(!empty($_GET['surname'] and !empty($_GET['name'])))
//         echo 'Name: '. $_GET['surname'] . ' ' . $_GET['name'] . '<br> Animals: ';

//     if(isset($_GET['cat'])) 
//         echo ''. $_GET['cat'] . ', ';

//     if(isset($_GET['dog'])) 
//         echo $_GET['dog'] . ', ';

//     if(isset($_GET['parrot'])) 
//         echo $_GET['parrot'] . ' ';

//     if(!empty($_GET['lang']) and $_GET['lang'] === 'eng')
//         echo  '<br> Language: '. $_GET['lang'];

//     if(!empty($_GET['lang']) and $_GET['lang'] === 'rus')
//         echo  '<br> Language: '. $_GET['lang'];
// }



?> 

<!-- <form action="" method="GET">
    <input type="text" name="surname">
	<input type="text" name="name"> <br><br>
	<input type="checkbox" name="cat" value="cat"> Кошка <br><br>
    <input type="checkbox" name="dog" value="dog"> Собака <br><br>
    <input type="checkbox" name="parrot" value="parrot"> Попугай <br><br> 
    <input type="radio" value="eng" name="lang"> Английский <br><br> 
    <input type="radio" value="rus" name="lang"> Русский <br><br>
    <input type="submit">
</form> -->


<table border="1" cellspacing="1" cellpadding="1">
    <th>Фамилия</th>
    <th>Имя</th>
    <th>Отчество</th>
    <tr>
        <td><?php echo $_SESSION['surname']  ?></td>    
        <td><?php echo $_SESSION['name']; ?></td>
        <td><?php echo $_SESSION['fatherName']; ?></td>
    </tr>
</table>
