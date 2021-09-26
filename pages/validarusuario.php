<?php 

include "conexion.php"; 


if(isset($_POST["usuario"]))
{ 
echo"ingresa";
$llave=$_POST["llave"]; 
$usuario=$_POST["usuario"]; 
$password=$_POST["password"]; 
$usuarioEncontrado=false; 


$sql = "SELECT codigo,usuario FROM usuario  where usuario='$usuario' and  password ='$password' ORDER BY codigo";
echo"$sql";
$result = $conexion->query($sql);
var_dump($result);
echo $result->num_rows."filas";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $usuarioEncontrado=true; 
	 }
} else {
    echo "0 resultados";
}
echo $usuarioEncontrado;
	if($usuarioEncontrado==true && $llave=="entrada"){
	    header("Location:entrada.php?error=false");
	}else if($usuarioEncontrado==true && $llave=="salida"){
	    header("Location:salida.php?error=false");
	}else if($llave=="entrada"){
		header("Location:login.html?error=true");
	}else if($llave=="salida"){
		header("Location:login_salida.html?error=true");
	}
}

include "cerrar_conexion.php"; 
?>
