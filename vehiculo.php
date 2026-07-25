<?php
class vehiculo
{

    /* atributos */

    public $marca;
    public $tipo;
    public $estado;

    /* Hay dos metodos:*/
    /* Metodo get sirve para obtener el valor de un atributo Metodo y el metodo "set" sirve para asignar un valor a un atributo */

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo_)
    {
        $this->tipo = $tipo_;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca_)
    {
        $this->marca = $marca_;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado_)
    {
        $this->estado = $estado_;
    }
}
