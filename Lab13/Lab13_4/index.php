<?php
trait Speed {
    private $Speed;
    function increaseSpeed() {
        $this->Speed+=10;
    }
    function decreaseSpeed() {
        if($this->Speed>0){
            $this->Speed-=10;
        }
    }
}

class Car {
    use Speed{
        Speed::increaseSpeed as inSpeed;
    }
    function start()
    {
        $this->Speed=0;
    }
    function increaseSpeed()
    {
        if($this->Speed==0){
            $this->inSpeed();
        }
    }
    function getSpeed(){
        return $this->Speed;
    }
}

$car = new Car();

$car->start();
echo $car->getSpeed()."\n";
$car->increaseSpeed();
echo $car->getSpeed()."\n";
$car->increaseSpeed();
echo $car->getSpeed()."\n";
$car->decreaseSpeed();
echo $car->getSpeed()."\n";