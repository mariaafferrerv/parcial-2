<?php
require "conexion.php";
$db = new Conexion();

// Consultar todos los registros
$sql = "SELECT * FROM inscriptores ORDER BY id DESC";
$resultado = $db->conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Inscritos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<h2>Reporte de Inscritos</h2>

<table border="1" cellpadding="8" cellspacing="0" style="margin:auto; background:white; border-radius:10px;">
    <tr style="background:#ffd6eb; font-weight:bold;">
        <td>ID</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Edad</td>
        <td>Sexo</td>
        <td>País</td>
        <td>Nacionalidad</td>
        <td>Tema</td>
        <td>Correo</td>
        <td>Celular</td>
        <td>Observaciones</td>
    </tr>

    <?php 
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$fila['id']."</td>";
            echo "<td>".$fila['nombre']."</td>";
            echo "<td>".$fila['apellido']."</td>";
            echo "<td>".$fila['edad']."</td>";
            echo "<td>".$fila['sexo']."</td>";
            echo "<td>".$fila['pais']."</td>";
            echo "<td>".$fila['nacionalidad']."</td>";
            echo "<td>".$fila['tema']."</td>";
            echo "<td>".$fila['correo']."</td>";
            echo "<td>".$fila['celular']."</td>";
            echo "<td>".$fila['observaciones']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='11' style='text-align:center;'>No hay registros aún</td></tr>";
    }
    ?>

</table>

<br>
<div style="text-align:center;">
    <a href="index.php">← Volver al formulario</a>
</div>

</body>
</html>
