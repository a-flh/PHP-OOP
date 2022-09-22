<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$car = new Car('green', 4, 'electric');
$truck = new Truck('red', 3, 'fuel', 1000);
$bicycle = new Bicycle('blue', 1);
$skateboard = new Skateboard('grey', 1);

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

// echo '<pre>';
// var_dump($bike);
// echo '</pre>';
// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();

// echo '<pre>';
// var_dump($car);
// echo '</pre>';
// echo $car->start();
// echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
// echo $car->forward();
// echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
// echo $car->brake();
// echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
// echo $car->brake();

// $bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// echo '<pre>';
// var_dump($bicycle);
// echo '</pre>';

// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// echo '<pre>';
// var_dump($car);
// echo '</pre>';

// var_dump(Car::ALLOWED_ENERGIES);

// echo '<pre>';
// var_dump($bicycle->switchOn());
// $bicycle->setCurrentSpeed(15);
// var_dump($bicycle->switchOn());
// var_dump($bicycle->switchOff());
// echo '</pre>';

// echo '<pre>';
// var_dump($car->getParkBrake());
// echo '</pre>';
// echo($car->start());
// echo '<pre>';
// var_dump($car->getParkBrake());
// echo '</pre>';

// $motorWay->addVehicle($truck);
// $motorWay->addVehicle($skateboard);
// $motorWay->addVehicle($bicycle);
// $motorWay->addVehicle($car);
// echo '<pre>';
// var_dump($motorWay->getCurrentVehicles());
// echo '</pre>';

// $pedestrianWay->addVehicle($truck);
// $pedestrianWay->addVehicle($skateboard);
// $pedestrianWay->addVehicle($bicycle);
// $pedestrianWay->addVehicle($car);
// echo '<pre>';
// var_dump($pedestrianWay->getCurrentVehicles());
// echo '</pre>';

// $residentialWay->addVehicle($truck);
// $residentialWay->addVehicle($skateboard);
// $residentialWay->addVehicle($bicycle);
// $residentialWay->addVehicle($car);
// echo '<pre>';
// var_dump($residentialWay->getCurrentVehicles());
// echo '</pre>';

// $truck->setLoad(700);
// echo $truck->isFull($truck->getStorageCapacity(), $truck->getLoad());

// $truck->setLoad(1200);
// echo $truck->isFull($truck->getStorageCapacity(), $truck->getLoad());

// $truck->setLoad(1000);
// echo $truck->isFull($truck->getStorageCapacity(), $truck->getLoad());

// if ($truck->isFull($truck->getStorageCapacity(), $truck->getLoad()) !== 'It\'s too much !') {
//   echo $truck->forward();
//   echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
//   echo $truck->brake();
//   echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
//   echo $truck->brake();
// }

?>
</body>
</html>
