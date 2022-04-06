<?php
class Viaje
{
    private $codigo;
    private $destino;
    private $cantidadMaxPasajero;
    private $pasajerosViaje;
    /**
     * 
     */
    function Viaje($cod, $des, $cantMaxPas, $pasViaje)
    {
        $codigo = $cod;
        $destino = $des;
        $cantidadMaxPasajero = $cantMaxPas;
        $pasajerosViaje = $pasViaje;
    }

    /**
     * Get the value of codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     *
     * @return  self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of destino
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     *
     * @return  self
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;

        return $this;
    }

    /**
     * Get the value of cantidadMaxPasajero
     */
    public function getCantidadMaxPasajero()
    {
        return $this->cantidadMaxPasajero;
    }

    /**
     * Set the value of cantidadMaxPasajero
     *
     * @return  self
     */
    public function setCantidadMaxPasajero($cantidadMaxPasajero)
    {
        $this->cantidadMaxPasajero = $cantidadMaxPasajero;

        return $this;
    }

    /**
     * Get the value of pasajerosViaje
     */
    public function getPasajerosViaje()
    {
        return $this->pasajerosViaje;
    }
    /* 
    */
    
    /**
     * Set the value of pasajerosViaje
     *
     * @return  self
     */
    public function setPasajerosViaje($nombre,$apellido,$dni)
    {
        $this->pasajerosViaje = $nombre;
        $this->pasajerosViaje = $apellido;
        $this->pasajerosViaje = $dni;

        return $this;
    }
}
