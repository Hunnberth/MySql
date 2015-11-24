<?php

	$conexion = mysqli_connect("localhost", "root", "alejandra", "programacionIV"); 

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
        <form action="conexion2.php"method="POST">
			<br/>
				<label>Id</label>
					<input type="text"name="id">
				<label>Titulo</label>
					<input type="text"name="titulo">
			<br/><br/>
				<label>Contenido</label>
			<br/>
			<textarea name="contenido"rows="15"cols="40"></textarea>
			<br/><br/>
					<input type="submit"value="Guardar">
		</form>
    </body>
</html>
