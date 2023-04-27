<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multiplicacion</title>
    </head>
    <body>
        <div>
            <form action="multiplicacion.php" method="post">
                <input type="number" name="op1" id="op1">
                <input type="number" name="op2" id="op2">
                <button type="submit">Multiplicar</button>
            </form>
        </div>
    </body>
</html>
<?php
if (isset($_POST['op1']) || isset($_POST['op2']) || isset($_POST['res'])) {
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $res = $op1 * $op2;

    echo "<table>
    <tr>
    <td>Resultado</td>
    </tr>
    <tr>
    <td>" . $res . "</td>
    </tr>
    </table>";
}
?>