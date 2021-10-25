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
$Skate = new Skate();


$motorWay = new MotorWay();
$motorWay->addVehicle(new Car());
$motorWay->addVehicle(new Bike());
$motorWay->addVehicle(new Skate());
var_dump($motorWay);


pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle(new Car());
$pedestrianWay->addVehicle(new Bike());
$pedestrianWay->addVehicle(new Skate());
var_dump($pedestrianWay);

$residentialWay =  new ResidentialWay();
$residentialWay->addVehicle(new Car());
$residentialWay->addVehicle(new Bike());
$residentialWay->addVehicle(new Skate());
var_dump($residentialWay);





