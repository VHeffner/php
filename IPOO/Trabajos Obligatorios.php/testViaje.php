<?php
include 'Viaje.php';
include 'Pasajero.php';
$viaje = new Viaje;
$pasajeros= new Pasajero;
$pasajeros=array();
//menu
do {
    echo "Elija la opcion: \n";
    echo "Opcion 0: Cargar Informacion del Viaje\n";
    echo "Opcion 1: Modificar la informacion del viaje \n";
    echo "Opcion 2: Ver los datos del viaje \n";
    echo "Opcion 3: SALIR \n";
    $opcion = trim(fgets(STDIN));
    $viaje = menu($opcion, $viaje, $pasajeros);
} while ($opcion >= 3);
/**
 * 
 */
function menu($opcion, $viaje, $pasajeros)
{
    switch ($opcion) {
        case 0:
            echo "Ingrese codigo de viaje: \n";
            $codigo = trim(fgets(STDIN));
            echo "Ingrese destino del viaje: \n";
            $destino = trim(fgets(STDIN));
            echo "Ingrese cantidad maxima de pasajero ";
            $cantidadMaximaPasajeros = trim(fgets(STDIN));     
            echo "Ingrese cantidad de viajes vendidos";
            $vendidos = trim(fgets(STDIN));
            $pasajeros = cargaInfor($pasajeros,$vendidos);
            $viaje = new Viaje($codigo, $destino, $cantidadMaximaPasajeros, $pasajeros);
            break;
        case 1:
            modificarInformacion($viaje);
            break;
        case 2:
            mostrarInformacion($viaje,$pasajeros);
            break;
        default:
            break;
    }
    return $viaje;
}

function cargaInfor($pasajeros,$vendidos)
{
    $pasajero = [$vendidos];
    $pasajeroDatos = ["nombre", "apellido", "dni"];
    for ($i = 0; $i < $vendidos; $i++) {
        echo "Ingrese Nombre: \n";
        $pasajeroDatos["nombre"] = trim(fgets(STDIN));
        echo "Ingrese el apellido: \n";
        $pasajeroDatos["apellido"] = trim(fgets(STDIN));
        echo "Ingrese DNI: \n";
        $pasajeroDatos["dni"] = trim(fgets(STDIN));
        $pasajero[$i] = $pasajeroDatos;
    }
    return $pasajero;
}
function modificarInformacion($viaje)
{
    echo "Que deasea cambiar: \n";
    echo "0: codigo del viaje: \n";
    echo "1: destino: \n";
    echo "2: cantidad maxima de pasajeros: \n";
    $opcion = trim(fgets(STDIN));
    switch ($opcion) {
        case 0:
            $viaje . setCodigo(trim(fgets(STDIN)));
            break;
        case 1:
            $viaje . setDestino(trim(fgets(STDIN)));
            break;
        case 2:
            $viaje . setCantidadMaxPasajero(trim(fgets(STDIN)));
            break;
        default:
    }
}
function mostrarInformacion($viaje,$pasajeros){
    echo "El codigo del viaje es: ".$viaje.getCodigo()." \n";
    echo "El destino del viajes es: ".$viaje.getDestino()." \n";
    echo "La cantidad maxima de pasajeros es de:".$viaje.getCantidadMaximaPasajero()." \n";
    for ($i=0; $i < count($pasajeros) ; $i++) {
        echo "Informacion del pasajero ".$i.": \n";
        echo "Nombre: ".$pasajeros[$i].getNombre()."\n";
        echo "Apellido: ".$pasajeros[$i].getApellido()."\n";
        echo "DNI: ".$pasajeros[$i].getDni()."\n";
    }
}
