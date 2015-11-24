<?php
    $title = $_POST["titulo"];
	$content = $_POST["contenido"];

	$conexion = mysqli_connect("localhost", "root", "alejandra", "programacionIV");

    $sql = "INSERT INTO `post` "."(`Titulo`, `Contenido`) "."VALUES "."('".$title."', '".$content."');";
    mysqli_query($conexion, $sql);
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
        </br>
        <table>
        <form action="edit.php"method="POST">
			<td><input type="submit"value="Editar"></td>
		</form>
		<form action="delete.php"method="POST">
			<td><input type="submit"value="Eliminar"></td>
		</form>
		</table>
    </body>
</html>
</br></br>
<a href="agregar.php">regresar</a>

         
