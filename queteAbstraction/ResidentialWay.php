<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay

{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;


    public function addVehicle($vehicle):void
    {
        if ($vehicle instanceof  Vehicle)
        {
            $this->currentVehicles[]= $vehicle;
        }
    // TODO: Implement addVehicle() method.
    }
}
