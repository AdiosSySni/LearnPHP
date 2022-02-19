<?php
// class Animal {
//     public string $foodType;
//     public string $height;
//     public string $weight;
//     public string $name;

//     private string $position = 0;

//     public function __construct(string $name, string $height, string $weight) {
//         $this->name = $name;
//         $this->height = $weight;
//         $this->weight = $weight;

//     }


//     final public function move(int $time, int $speed = 50) : void {
//         $this->position += $time * $speed;
//     }

//     public function getPosition() : int {
//         return $this->position;
//     }

//     public function eat() : void {

//     }
// }


// class Bird extends Animal {
//     public function fly(int $time, int $speed = 10) : void {
//         $this->move($time, $speed);
//     }
// }


// final class Fish extends Animal {
//     public function swim(int $time, int $speed = 5) : void {
//         $this->move($time, $speed);
//     }
// }


// $pike = new Fish('pike', 5, 20);
// $pike->swin(1,10);
// /**
//  * мы можем не указывать скорость
//  * и тогда сработает значение по умолочанию
//  * для рыбы оно равно 5
//  */

//  $pike->weight = 50;



//  $pike->swim(1);
//  $pike->fly(1,5); // выдаст ошибку, что метод не найден
//  $pike->getPosition();


//  echo $pike->height;
// $pelican = new Bird('pelican', 2, 50);
// $pelican->fly(1,5);
// $pelican->fly(1); // для птицы значение скорости по умолчанию равно 10
// $pelican->swim(1,5); // выдаст ошибку, что метод не найден
// $pelican->getPosition();


// $dog = new Animal('dog', 5, 60);
// $dog->swim(1,10); // выдаст ошибку, что метод не найден
// $dog->fly(1,5); // выдаст ошибку, что метод не найден
// $dog->move(1,5);
// $dog->move(1); // значение скорости по умолочанию равно 50
// $dog->getPosition();




// class AirPlane {
//     private string $foodType = null;
//     private string $position = 0;

//     public function __construct(
//         private string $name = null,
//         private int $height = 0,
//         private int $weight = 0
//     ) {}
    
// }


// function sayText (
//     string $font,
//     string $text,
//     string $lang = 'ru',
//     string $color = 'red',
//     string $size = '16px') : void 
// {

//     echo $text;
// }

// // sayText('Arial', 'Привет');
// // sayText(lang: 'en', text: 'Hello', font: 'Arial');

// ini_set('error_reporting', E_ALL);



// function my_error_handler(int $hardness, string $message, string $file, int $line) 
// {
//     if(!(error_reporting() & $hardness)) {
//         return;
//     }
//     throw new ErrorException($message, 0, $hardness, $file, $line);
// }

// set_error_handler("my_error_handler");