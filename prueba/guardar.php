<?php
require "conexion.php";
$db = new Conexion();

// Función para poner la primera letra en mayúscula
function capitalizar($texto){
    return ucfirst(strtolower($texto));
}

// Captura de datos
$nombre = capitalizar($_POST["nombre"]);
$apellido = capitalizar($_POST["apellido"]);
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$pais = $_POST["pais"];
$nacionalidad = $_POST["nacionalidad"];
$tema = isset($_POST["tema"]) ? implode(", ", $_POST["tema"]) : "";
$observaciones = $_POST["observaciones"];
$correo = $_POST["correo"];
$celular = $_POST["celular"];
$fecha = $_POST['fecha'];


// Query de inserción
$sql = "INSERT INTO inscriptores 
(nombre, apellido, edad, sexo, pais, nacionalidad, tema, observaciones, correo, celular)
VALUES 
('$nombre', '$apellido', '$edad', '$sexo', '$pais', '$nacionalidad', '$tema', '$observaciones', '$correo', '$celular')";

// Resultado
if ($db->conexion->query($sql)) {
    echo "<h3>Datos guardados correctamente</h3>";
    echo "<a href='reporte.php'>Ver reporte</a>";
} else {
    echo "Error al guardar: " . $db->conexion->error;
}
?>
