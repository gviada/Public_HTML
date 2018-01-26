<?php

	$conexion = mysqli_connect("localhost", "root", "", "empresa");

	
	$localidad = $_POST["localidad"];
	$nom_departamento = $_POST["nom_departamento"];
	$num_departamento = $_POST["num_departamento"];
	echo "$localidad";
	echo "<br> $nom_departamento";
	echo "<br> $num_departamento";

	
	    if(isset($_POST['localidad'])){
      //Insertamos los datos en SQL en mi caso la tabla se  
      //llama personas y consta de dos celdas 
      //la de nombres y la de nick
      $insertar = "INSERT INTO departamentos (localidad, nom_departamento, num_departamento) 
          VALUES ('".$_POST['localidad']."', '".$_POST['nom_departamento']."', '".$_POST['num_departamento']."')";
      mysql_query($insertar,$conexion); 
     }

?>