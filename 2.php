<?php

abstract class Vehicles
{
    public function driveAhead() {
        //
    }
    public function backUp() {
        //
    }
    public function tankUp() {
        //
    }
    public function useHeadlights() {
        //
    }
    public function useWipers() {
        //
    }
    public function honk() {
        //
    }

    const madeOf = 'Metal';
}

class Bulldozer extends Vehicles
{
    protected $color = 'yellow';
    protected $sound = 'boop';
    public function useBucket() {
        //
    }
    public function honk() {
        echo $sound;
    }
}

class Car extends Vehicles
{
    protected $color = 'red';
    protected $sound = 'beep';
    public function nitrous(){
        //
    }
    public function honk() {
        echo $sound;
    }
}

class Tank extends Vehicles
{
    protected $color = 'khaki';
    public function shoot() {
        //
    }
}

$sedan = new Car;
$sedan->driveAhead();
$sedan->nitrous();

?>