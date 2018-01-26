<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title></title>

</head>

<body>

	<fieldset>
	
	<form action="process.php" method="POST">
	
		<input type="text" name="localidad" placeholder="localidad">
		<br>
		<br>
		<input type="text" name="nom_departamento" placeholder="nom departamento">
		<br>
		<br>
		<input type="text" name="num_departamento" placeholder="num departamento">
		<input type="submit" value="enviar">
		
	</form>	
	
	</fieldset>
	
</body>
</html>

-->

<html>
<head>
<title>Codigo para guardar</title>
</head>
<body>
<h1>
<strong>Formulario ejemplo !!!</strong></h1>
  <form action=”process.php” method=”post” name=”datos”>
    Localidad:<input name=”Nombre” type=”text” id=”localidad”><br>
    Nombre Departamento:<input type=”text” name=”nom_departamento” id=”nom_departamento” ><br>
    Numero Departamento:<input type=”text” name=”num_departamento” id=”num_departamento” ><br>
	<input type="submit" value="Aceptar" name="ok">

  </form>
</body>
</html>