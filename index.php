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


abstract class Car {
    // private ?int $position = null;

    public function __construct(
        protected string $brand,
        protected string $model,
        private ?int $position = 5
    )
    {
        // echo __CLASS__.':'.__METHOD__."<br>";
    }

    public function getPosition() : ?int {
        // echo __CLASS__.':'.__METHOD__."<br>";
        return $this->position;
    }

    public function move(int $speed, int $time) : void{
        // echo __CLASS__.':'.__METHOD__."<br>";
        $this->position += $speed * $time;
    }

    abstract public function getModel() : string;
}


class Lexus extends Car {
    public function __construct(string $model)
    {
        // echo __CLASS__.':'.__METHOD__."<br>";
        parent::__construct('Lexus', $model);
    }
    public function getModel() : string {
        // echo __CLASS__.':'.__METHOD__."<br>";
        return $this->model . ' ' . $this->brand;
    }
}

class Porsche extends Car {
    public function __construct(string $model)
    {
        // echo __CLASS__.':'.__METHOD__."<br>";
        parent::__construct('Porsche', $model);
    }

    public function getModel() : string {
        // echo __CLASS__.':'.__METHOD__."<br>";
        return $this->brand . ' ' . $this->model;
    }
}


require 'index.htm';
// 
$p911 = new Porsche('911');
// echo $p911 -> getModel().'<br>';

$lexus = new Lexus('470');
// echo $lexus -> getModel().'<br>';

if (!empty($_GET['speed']) && !empty($_GET['time'])) {
    $p911 -> move($_GET['speed'], $_GET['time']);
    echo $p911 -> getModel().'<br>';
}

if (!empty($_GET['speed']) && !empty($_GET['time'])) {
    $lexus -> move($_GET['speed'], $_GET['time']);
    echo $lexus -> getModel().'<br>';
}


// $p911 = new Car('Porshe', '911', 50);
// echo $p911 -> getPosition().'<br>';
// $p911 -> move(10, 50);
// echo $p911 -> getPosition();



 ?>