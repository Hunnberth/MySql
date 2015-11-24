<?php
    $id = $_POST["id"];
    
	$conexion = mysqli_connect("localhost", "root", "alejandra", "programacionIV");

    $sqlupdate = "DELETE FROM `post` WHERE `Id` = '".$id."'";
    mysqli_query($conexion, $sqlupdate);
    echo "Conexion exitosa!";  

    $sqlselect = "SELECT * FROM `post`";
    $result = mysqli_query($conexion, $sqlselect);
?>
<html>
    <head>
        <title>programacionIV</title>
    </head>
    <body>
        <table border="2px">
            <tr>
                <td>Id</td>
                <td>Titulo</td>
                <td>Contenido</td>
            </tr>
            <tr>
            <?php while ($field = mysqli_fetch_array($result)) {?>
            <tr>
                <td><?php echo "$field[Id]";?></td>
                <td><?php echo "$field[Titulo]";?></td>
                <td><?php echo "$field[Contenido]";?></td>
            </tr>
            <?php } ?>
            </tr>
        </table>
    </body>
</html>
</br></br>
<a href="agregar.php">regresar</a>