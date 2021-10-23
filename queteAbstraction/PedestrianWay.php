<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;


    /*const ALLOWED_VEHICLES = [
        'skate',
        'bike',
    ];*/


    public function addVehicle(Vehicle $vehicle):void
    {

        if($vehicle instanceof Bike || $vehicle instanceof Skate)
        {
            $this->currentVehicles[]= $vehicle;
        }
        // TODO: Implement addVehicle() method.
    }

}