<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
    </head>
    <body>
        <div>
            <h2>Seleccione una opcion</h2>
            <ul>
                <li>1.Nombre</li>
                <li>2.Suma</li>
                <li>3.Resta</li>
                <li>4.Multiplicacion</li>
                <li>5.Division</li>
            </ul>
        </div>
        <form action="menu.php" method="post" > <p>Selecione una opcion</p>  
            <input type="text" name='opt' id='opt'>
            <button type="submit"> Ingresar </button>
        </form>
        <?php
        if (isset($_POST['opt'])) {
            $opt = $_POST['opt'];

            switch ($opt) {
                case '1':
                    header('Location: formulario.php');
                    break;
                case '2':
                    header('Location: suma.php');
                    break;
                case '3':
                    header('Location: resta.php');
                    break;
                case '4':
                    header('Location: multiplicacion.php');
                    break;
                case '5':
                    header('Location: division.php');
                    break;
                // default:
                //     echo "Seleccione una opcion valida";
                //     break;
            }
        }
        ?>
    </body>
</html>
