<?php
require_once 'HighWay.php';
require_once  'Vehicle.php';
require_once 'Car.php';


final class MotorWay extends HighWay
    {
    /*const ALLOWED_VEHICLES =
        [
        'car',
            'truck'
        ];*/

    protected int $nbLane = 4;
    protected int $maxSpeed = 150;



    public function addVehicle(Vehicle $vehicle):void
        {
             if($vehicle instanceof Car)
            {
            $this->currentVehicles[]=$vehicle;
            }
        // TODO: Implement addVehicle() method.
        }

}