<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de empleados</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="text" name="apellido" placeholder="apellido">
        <input type="email" name="email" placeholder="email">
        <input type="text" name="telefono" placeholder="telefono">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("cliente.php");
        ?>
</body>
</html>