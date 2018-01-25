<!DOCTYPE html>
<html>
<head>

<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<div id="content">

<div id="centro">

<!--actividad 1-->

<?php
header('Content-Type: text/html; charset=UTF-8');
 $conexion=mysqli_connect("localhost","root","","prueba");
 /*mysqli_select_db("prueba",$conexion);*/
 $resul=mysqli_query($conexion,"SELECT * FROM alumnos ORDER BY nombre"); 
 
 /*if (!$resul) {
     $message  = 'ERROR CONSULTA ' . mysqli_error();
     die($message);
 }*/
echo "<h2>LISTADO DE LOS ALUMNOS</h2>";
echo "<table>";
echo "<tr><th>Nombre</th><th>DIRECCIÓN</th>
             <th>POBLACIÓN</th>  <th>FECHA NACIMIENTO</th>
						 <th>NUMERO MATRICULA</th>  <th>CURSO</th>
		 </tr>";
while($fila = mysqli_fetch_array($resul)){
        echo "<tr bgcolor='#FFFF99'>";
        echo "<td>$fila[nombre] </td>";
        echo "<td>$fila[direccion] </td>";
        echo "<td>$fila[poblacion] </td>";
		echo "<td>$fila[fecha_nac] </td>";
		echo "<td>$fila[num_matricula] </td>";
		echo "<td>$fila[curso] </td>";												
        echo "</tr>";
}
echo"</table></center>";
$numero = mysqli_num_rows($resul);
echo "<br/> <hr/><h2>Número de ALUMNOS : $numero</h2>";
mysqli_close($conexion);
?>

<br>
<hr>
<br>

<!--actividad 2-1-->

<?php
header('Content-Type: text/html; charset=UTF-8');
 $conexion=mysqli_connect("localhost","root","","empresa");
 /*mysqli_select_db("prueba",$conexion);*/
 $resul=mysqli_query($conexion,"SELECT * FROM empleados ORDER BY num_empleado"); 
 
 /*if (!$resul) {
     $message  = 'ERROR CONSULTA ' . mysqli_error();
     die($message);
 }*/
echo "<h2>LISTADO DE LOS EMPLEADOS</h2>";
echo "<table>";
echo "<tr><th>Numero de empleado</th><th>Nombre de empleado</th>
             <th>Direccion</th>  <th>Telefono</th>
						 <th>Salario</th>  <th>Numero de departamento</th>
							<th>Oficio</th>
		 </tr>";
while($fila = mysqli_fetch_array($resul)){
        echo "<tr bgcolor='#FFFF99'>";
        echo "<td>$fila[num_empleado] </td>";
        echo "<td>$fila[nom_empleado] </td>";
        echo "<td>$fila[direccion] </td>";
		echo "<td>$fila[telefono] </td>";
		echo "<td>$fila[salario] </td>";
		echo "<td>$fila[num_departamento] </td>";
		echo "<td>$fila[oficio] </td>";
        echo "</tr>";
}
echo"</table></center>";
$numero = mysqli_num_rows($resul);
echo "<br/> <hr/><h2>Número de EMPLEADOS : $numero</h2>";
mysqli_close($conexion);
?>

<br>
<hr>
<br>

<!--actividad 2-2-->

<?php
header('Content-Type: text/html; charset=UTF-8');
 $conexion=mysqli_connect("localhost","root","","empresa");
 /*mysqli_select_db("prueba",$conexion);*/
 $resul=mysqli_query($conexion,"SELECT * FROM departamentos ORDER BY num_departamento"); 
 
 /*if (!$resul) {
     $message  = 'ERROR CONSULTA ' . mysqli_error();
     die($message);
 }*/
echo "<h2>LISTADO DE LOS DEPARTAMENTOS</h2>";
echo "<table>";
echo "<tr><th>Localidad</th><th>Nombre de departamento</th>
             <th>Numero de departamento
		 </tr>";
while($fila = mysqli_fetch_array($resul)){
        echo "<tr bgcolor='#FFFF99'>";
        echo "<td>$fila[localidad] </td>";
        echo "<td>$fila[nom_departamento] </td>";
		echo "<td>$fila[num_departamento] </td>";
        echo "</tr>";
}
echo"</table></center>";
$numero = mysqli_num_rows($resul);
echo "<br/> <hr/><h2>Número de DEPARTAMENTOS : $numero</h2>";
mysqli_close($conexion);
?>
<br>
</div>
<!--content fin -->
</div>

<div id="pie">
   <p>Copyright Shiru Ka Edited code 2K17</p>
</div>
<!-- pie fin-->
</body>
</html>