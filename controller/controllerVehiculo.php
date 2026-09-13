<?php
require_once __DIR__ . '/../model/vehiculo.php';
require_once __DIR__ . '/../view/resultado.php';

class VehiculoController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Vehiculo();
    }

    /* Recibe los datos "crudos" (por ejemplo, de un formulario o, como aquí,
       de valores fijos en el index) y se los pasa al modelo */
    public function crearVehiculo($marca, $tipo, $estado)
    {
        $this->modelo->setMarca($marca);
        $this->modelo->setTipo($tipo);
        $this->modelo->setEstado($estado);
    }

    /* Arma el arreglo de datos que la vista necesita y le pide que los pinte */
    public function mostrar()
    {
        $datos = [
            'marca'  => $this->modelo->getMarca(),
            'tipo'   => $this->modelo->getTipo(),
            'estado' => $this->modelo->getEstado(),
        ];

        mostrarVehiculo($datos);
    }
}
