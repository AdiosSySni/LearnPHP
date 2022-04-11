
<?php

// class User {
//     public function __construct(
//         private string $name,
//         private int $old
//     ){}

//     public function getData() : string {
//         return $this->name . '' . $this->old;
      
//     }
// }
// require ('index.html');

// echo $user1 = new User($_POST['name'], $_POST['old']);

// echo $user1 = new User($_GET['name'], $_GET['old']);
// echo $user1;
// if(!empty($_Get['name']) && !empty($_GET['old'])) {
//   echo $user1->getData();
// }

// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// $res = 0;
	
// foreach($arr as $item) {
//    $res += $item;
// }

// echo 'Средне арифмитическое значение: ' . $res / count($arr);

// $arr = ['1' =>6, '2' => 7, '3' => 8, '4' => 9, '5'=> 10];
// $resElem = 0;
// $resKey = 0;
// $res = 0;

// foreach($arr as $key => $item) {
//     $resElem += $item;
//     $resKey += $key;
// }

// echo 'Деление елементов на ключи: '. $res = $resKey / $resElem;


// foreach($arr as $key => $item) {
//     $res += $item. '<br>';
// }

// echo 'Сумма возрастов: '. $res;

// foreach($arr as $elem) {
//     $res += $elem;
//     // echo key($arr) . ' '. $elem . ' ';
// }
// echo 'Сумма: ' . $res;
include_once('menu.php');
?>

<h1>Главная</h1>

<?php
    include_once('footer.php'); 
?>

