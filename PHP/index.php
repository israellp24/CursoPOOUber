<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberVan.php");
require_once("uberPool.php");
require_once("account.php");

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

$uberVan = new UberVan("BGY", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberVan->setPassenger(6);
$uberVan->printDataCar();

/* $uberPool = new UberPool("TYU567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
$uberPool->printDataCar(); */
?>