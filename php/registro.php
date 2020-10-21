<!DOCTYPE html>
<html>
   <head>
      <title>Registro</title>
      <meta charset="utf-8"/>
   </head>
   
     <style>
    .boton {
      padding: 10px;
      background-color: pink;
      color: white;
    }
  </style>
  <h2><a href= "index.html" class="boton">VOLVER A LA PAGINA PRINCIPAL</a></h2>
 
   <body>
      <?php

      //valores del formulario
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $correo = $_POST["correo"];

      //valores para la base de datos
      $db_host="mysql.webcindario.com";
      $db_user="laecologia";
      $db_password="jaredaugusto0123";
      $db_name="laecologia";
      $db_table_name="Visitantes";

      

      
      
      //iniciar conexion con base de datos con los parametros establecidos
      $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            //campos de la base de datos: id, nombre, apellido, email
            //esta es la consulta sql para insertar datos
            $sql = "INSERT INTO Visitantes (id, Nombre, Apellido, Correo) VALUES (NULL, '$nombre' , '$apellido' , '$correo');"; 
            
            if (mysqli_query($conn, $sql)) {
                echo "<img src='https://cdn.pixabay.com/photo/2012/04/23/16/14/correct-38751_1280.png' width='600' align='center'/> <br/> <p>Se agrego correnctamente el registro</p>";
            } else {
                echo "<img src='https://cdn.pixabay.com/photo/2017/02/12/21/29/false-2061131_960_720.png' width='600' align='center'/> <br/> <p>No se pudo completar el registro</p>";
            }
            mysqli_close($conn);
      ?>
      </head>

      <h2><a href="registros.php"><button>Ver Registros</button></a></h2>
   </body>
</html>