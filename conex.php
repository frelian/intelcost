<?php

function conectarse() {

    $dbhost ="localhost";
    $dbusuario ="root";
    $dbpassword ="a123456";
    $db = "Intelcost_bienes";

    $conecta = new mysqli($dbhost, $dbusuario, $dbpassword);
    $conecta->set_charset("utf8");
    $conecta->select_db($db);

    return $conecta;
}

function insertarBien($Id, $Direccion, $Ciudad, $Telefono, $Codigo_Postal, $Tipo, $Precio){

    $var = conectarse();

    $sql = "INSERT INTO Bien(Id, Direccion, Ciudad, Telefono, Codigo_Postal, Tipo, Precio) VALUES ('".$Id."',  '".$Direccion."', '".$Ciudad."', '".$Telefono."', '".$Codigo_Postal."', '".$Tipo."', '".$Precio."')";

    if (mysqli_query($var, $sql)) {
        echo "Se a creado el nuevo registro correctamente...";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($var);
    }
    $var->close();

}

function cargarDatos(){

    $var = conectarse();

    $query = $var->query("SELECT * FROM Bien");
    $array = [];

    while ($valores = mysqli_fetch_array($query)) {

        array_push($array, $valores);
    }

    return $array;
}



