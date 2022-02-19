<?php 


interface EngineManager {
    public function startEngine() : void;
    public function stopEngine() : void;
}

interface TransmissionСontrol {
    public function IsFirstGear() : bool;
    public function IsSecondGear() : bool;
    public function IsThirdGear() : bool;
    public function IsFourthGear() : bool;
}

interface Car extends EngineManager, TransmissionСontrol
{

}


abstract class InfoCar implements Car{

    public function __construct(
        private EngineManager $EngineManager,
        private TransmissionСontrol $TransmissionСontrol,

        private string $model,
        private string $brand,
        private string $color,

        private ?int $engineCapacity = 0,
        private ?int $fuelUsage = 0
    )
    {}

    public function startEngine() : void  
    {
        $this->$EngineManager->startEngine();
    }

    public function stopEngine() : void 
    {
        $this->$EngineManager->stopEngine();
    }

}

class Porshe extends InfoCar {
    
}






