<?php
require_once 'controller/vehiculo_controller.php';

$controlador = new VehiculoController();
$controlador->crearVehiculo("Toyota", "Off_Road", "Nuevo");
$controlador->mostrar();
