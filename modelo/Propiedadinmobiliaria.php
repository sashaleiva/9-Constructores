<?php
class Propiedadinmobiliaria
{
    private $Id;
    private $Direccion;
    private $MetrosCuadrados;
    private $Ciudad;
    private $Valor;

    public function __construct($id, $d, $Mc, $ciud, $val)
    {
        $this->Id = $id;
        $this->Direccion = $d;
        $this->MetrosCuadrados = $Mc;
        $this->Ciudad = $ciud;
        $this->Valor = $val;
    }

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getDireccion()
    {
        return $this->Direccion;
    }

    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }
    public function getMetrosCuadrados()
    {
        return $this->MetrosCuadrados;
    }

    public function setMetrosCuadrados($MetrosCuadrados)
    {
        $this->MetrosCuadrados = $MetrosCuadrados;
    }

    public function getCiudad()
    {
        return $this->Ciudad;
    }

    public function setCiudad($Ciudad)
    {
        $this->Ciudad = $Ciudad;
    }

    public function getValor()
    {
        return $this->Valor;
    }
    public function setValor($Valor)
    {
        $this->Valor = $Valor;
    }
    public function MostrarDatos()
    {
        echo 'id: ' . $this->getId();
        echo '<br>';
        echo 'Dirección : '.$this->getDireccion();
        echo '<br>';
        echo 'Metros cuadrados: ' . $this->getMetrosCuadrados();
        echo '<br>';
        echo 'Ciudad: ' . $this->getCiudad();
        echo '<br>';
        echo 'Valor: ' . $this->getValor();
        echo '<br>';
    }
}
