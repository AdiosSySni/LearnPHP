<?php
// $num = 10;
// $num1 =& $num;


// for($i=0; $i < 10; $i++) {
//     $num+=1;
//     echo $num1.PHP_EOL;
// }

// define('CONSTANT', 'Hello world');
// // CONSNT = 10;

// echo CONSTANT;

// // define('arr', array(
// //     '1',
// //     '2',
// //     '3'
// // ));

// // echo arr[0];

// $x= 2;

// $result = match($x) {
//     1 => 'Единица',
//     2 => 'Двойка',
//     3 => 'Тройка'
// };

// echo $result.PHP_EOL;



// class BaseClass {
//     function __construct() {
//         print "Конструктор класса BaseClass\n";
//     }
//  }
 
//  class SubClass extends BaseClass {
//     function __construct() {
//         parent::__construct();
//         print "Конструктор класса SubClass\n";
//     }
//  }
 
//  class OtherSubClass extends BaseClass {
//      // наследует конструктор BaseClass
//  }
 
//  // Конструктор класса BaseClass
//  $obj = new BaseClass();
 
//  // Конструктор класса BaseClass
//  // Конструктор класса SubClass
//  $obj = new SubClass();
 
//  // Конструктор класса BaseClass
//  $obj = new OtherSubClass();


// class Main 
// {
  
//     public string $str = 'Hello world';

//     final public function func(?string $newVal = null) {
//        // $string = 'Hello world';
//        if ($newVal !== null) {
//            $this->str = $newVal;
//        }
//        echo $this->str;
//        // return $string;
//     }
// }

// $obj = new Main();
// $obj -> func();


class Car {
    // private ?int $position = null;

    public function __construct(
        private string $brand,
        private string $model,
        private ?int $position = 5
    )
    {}

    public function getPosition() : ?int {
        return $this->position;
    }

    public function move(int $speed, int $time) : void{
        $this->position += $speed * $time;
    }
}


require 'index.htm';

$p911 = new Car('Porshe', '911');
echo $p911 -> getPosition().'<br>';

$lexus = new Car('Lexus', '470');
echo $lexus -> getPosition().'<br>';

if (!empty($_GET['speed']) && !empty($_GET['time'])) {
    $p911 -> move($_GET['speed'], $_GET['time']);
    echo $p911 -> getPosition().'<br>';
}

if (!empty($_GET['speed']) && !empty($_GET['time'])) {
    $lexus -> move($_GET['speed'], $_GET['time']);
    echo $lexus -> getPosition().'<br>';
}


// $p911 = new Car('Porshe', '911', 50);
// echo $p911 -> getPosition().'<br>';
// $p911 -> move(10, 50);
// echo $p911 -> getPosition();






 ?>