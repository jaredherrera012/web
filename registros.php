<!DOCTYPE html>
<html>
<head>
<title>Registros</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="Estiloss.css">
</head>
 <style>
    .boton {
      padding: 10px;
      background-color: purple;
      color: white;
    }
  </style>
  <h2><a href= "index.html" class="boton">VOLVER A LA PAGINA PRINCIPAL</a></h2>

<body>
<h1>Usuarios Registrados</h1>

<!--Los td son columnas y los tr son filas-->
<div class="contenedor">
<table>
<tr>
<td class="principales">NOMBRE</td>
<td class="principales">APELLIDO</td>
<td class="principales">CORREO</td>
</tr>
<tr>
<?php
$db = new mysqli("mysql.webcindario.com", "laecologia","jaredaugusto0123", "laecologia");

if ($db->connect_error){
die('Error de Conexion ('.$db->connect_errno.')'.$db->connect_error);
}

$query = "SELECT * FROM Visitantes";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El número de elementos es ".$numfilas;

for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
echo "<tr>";
echo "<td>" . $fila->Nombre . "</td>";
echo "<td>" . $fila->Apellido . "</td>";
echo "<td>" . $fila->Correo . "</td>";
echo "</tr>";
}

$result->free();
$db->close();
?>
</tr>
</table>
</div>


</body>
</html>