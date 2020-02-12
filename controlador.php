
<?php

$Id        = $_POST['Id'];
$Direccion = $_POST['Direccion'];
$InsertCiudad    = $_POST['Ciudad'];
$selCiudad    = $_POST['ciudad'];
$Tel    = $_POST['Telefono'];
$Codigo_Postal    = $_POST['Codigo_Postal'];
$SelTipo      = $_POST['tipo'];
$InsertTipo      = $_POST['Tipo'];
$Precio      = $_POST['Precio'];

include("conex.php");

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // consulta de insertar mysql
    insertarBien($Id, $Direccion, $InsertCiudad, $Tel, $Codigo_Postal, $InsertTipo, $Precio);
}
else
{
    header('Content-type: application/json');
    echo json_encode(cargarDatos());
}

?>