<?php

require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'HighWay.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Bike.php';
require_once 'Skate.php';


$car = new Car();
$bike = new Bike();
$skate = new Skate();


$motorWay = new MotorWay();
$motorWay->addVehicle($car);
$motorWay->addVehicle($bike);
$motorWay->addVehicle($skate);
var_dump($motorWay);


$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($skate);
var_dump($pedestrianWay);

$residentialWay =  new ResidentialWay();
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($bike);
$residentialWay->addVehicle($skate);
var_dump($residentialWay);





