<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<h2>Formulario de Inscripción</h2>

<form action="guardar.php" method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="María Ferrer" required>

    <label>Apellido:</label>
    <input type="text" name="apellido" required>

    <label>Edad:</label>
    <input type="number" name="edad" required>

    <label>Sexo:</label>
    <select name="sexo" required>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
        <option value="Otro">Otro</option>
    </select>

    <?php 
    require "conexion.php";
    $db = new Conexion();
    $paises = $db->conexion->query("SELECT * FROM paises ORDER BY nombre ASC");
    ?>

    <label>Pais de Residencia:</label>
    <select name="pais" required>
        <option value="">Seleccione un país</option>

        <?php
        while ($p = $paises->fetch_assoc()) {
            echo "<option value='".$p['nombre']."'>".$p['nombre']."</option>";
        }
        ?>
    </select>

    <label>Nacionalidad:</label>
    <input type="text" name="nacionalidad" required>

    <label>Tema tecnológico que te gustaría aprender:</label><br>
    <input type="checkbox" name="tema[]" value="PHP"> PHP
    <input type="checkbox" name="tema[]" value="Python"> Python
    <input type="checkbox" name="tema[]" value="JS"> JavaScript
    <input type="checkbox" name="tema[]" value="Ciberseguridad"> Ciberseguridad
    <br><br>

    <label>Observaciones o Consulta:</label>
    <textarea name="observaciones" required></textarea>

    <label>Correo:</label>
    <input type="email" name="correo" required>

    <label>Celular:</label>
    <input type="text" name="celular" required>

    <label>Fecha:</label>
<input type="date" name="fecha" required>


    <button type="submit">Enviar</button>
</form>

<footer>
    © 2025 ITECH. All rights reserved.
</footer>

</body>
</html>
