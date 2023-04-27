<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
            <form action="formulario.php" method="post">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre"><br>
                <br><input type="text" name="apellido" id="apellido" placeholder="Apellido"><br>
                <br><input type="text" name="telefono"  id="telefono" placeholder="Telefono"><br>
                <br><input type="text" name="direccion" id="direccion" placeholder="Direccion"><br>
                <br><input type="text" name="correo" id="correo" placeholder="Correo"><br>
                <br><button type="submit">Enviar</button>
            </form>   
        </div>
        <?php
        if (isset($_POST['nombre']) || isset($_POST['apellido']) || isset($_POST['telefono']) || isset($_POST['direccion']) || isset($_POST['correo'])) {
            $nombres = $_POST['nombre'];
            $apellidos = $_POST['apellido'];
            $telefonos = $_POST['telefono'];
            $direcciones = $_POST['direccion'];
            $correos = $_POST['correo'];

            echo "<table>
            <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Telefono</td>
            <td>Direccion</td>
            <td>Correo</td>
            </tr>
            <tr>
            <td>".$nombres."</td>
            <td>".$apellidos."</td>
            <td>".$telefonos."</td>
            <td>".$direcciones."</td>
            <td>".$correos."</td>
            </tr>
            </table>";
        }
        ?>
    </body>
</html>

