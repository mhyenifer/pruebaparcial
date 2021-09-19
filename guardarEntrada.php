<?php 

include "conexion.php"; 


if(isset($_POST["codigo"]))
{ 
echo"ingresa";
$codigo=$_POST["codigo"]; 
$nombre=$_POST["nombre"]; 
$fecha=$_POST["fecha"]; 
$productoEncontrado=false; 

$sql = "INSERT INTO entrada(codigo,codigo_nombre,fecha,cod_tipo_movimiento,total) VALUES ($codigo,'$nombre','$fecha',1,0)";

if ($conexion->query($sql) === TRUE) {
    echo "datos guardados  exitosamente";
} else {
    echo "error en guardar datos: " . $conexion->error;
}



//guardar 3 detalles


$codigo1=$_POST["codigo1"]; 
$producto1=$_POST["producto1"]; 
$cantidad1=$_POST["cantidad1"]; 
$precio1=$_POST["precio1"]; 
$total1=$_POST["total1"]; 


$sql1 = "INSERT INTO entrada_detalle(codigo,cantidad,codigo_producto,precio,total,codigo_entrada) VALUES ($codigo1,$cantidad1,$producto1,$precio1,$total1,$codigo)";

echo $sql1;
if ($conexion->query($sql1) === TRUE) {
    echo "datos guardados  exitosamente detalle 1";
} else {
    echo "error en guardar datos: " . $conexion->error;
}



$codigo2=$_POST["codigo2"]; 
$producto2=$_POST["producto2"]; 
$cantidad2=$_POST["cantidad2"]; 
$precio2=$_POST["precio2"]; 
$total2=$_POST["total2"]; 


$sql2 = "INSERT INTO entrada_detalle(codigo,cantidad,codigo_producto,precio,total,codigo_entrada) VALUES ($codigo2,$cantidad2,$producto2,$precio2,$total2,$codigo)";

echo $sql2;
if ($conexion->query($sql2) === TRUE) {
    echo "datos guardados  exitosamente detalle 2";
} else {
    echo "error en guardar datos: " . $conexion->error;
}


$codigo3=$_POST["codigo3"]; 
$producto3=$_POST["producto3"]; 
$cantidad3=$_POST["cantidad3"]; 
$precio3=$_POST["precio3"]; 
$total3=$_POST["total3"]; 


$sql3 = "INSERT INTO entrada_detalle(codigo,cantidad,codigo_producto,precio,total,codigo_entrada) VALUES ($codigo3,$cantidad3,$producto3,$precio3,$total3,$codigo)";

echo $sql3;
if ($conexion->query($sql3) === TRUE) {
    echo "datos guardados  exitosamente detalle 3";
} else {
    echo "error en guardar datos: " . $conexion->error;
}

///actualizar producto e insertar inventario

for($i=1;$i<=3;$i++){

   $productoInve=$_POST["producto".$i]; 
   if(!empty($productoInve)){
        $sqlp = "SELECT codigo,nombre,existencia FROM producto  where codigo=$productoInve ORDER BY codigo";
        echo"$sqlp";
        $result = $conexion->query($sqlp);
        $existenciaSaldoP1=0;
        $existenciaProducto1=0;
        var_dump($result);
        echo $result->num_rows."filas";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            $existenciaProducto1=$row["existencia"]; 
            }
            if($existenciaProducto1>0){
                $existenciaSaldoP1=($existenciaProducto1+$cantidad1);
            }else{
                $existenciaSaldoP1=$cantidad1;
            }
        } else {
            echo "0 resultados producto";
            $existenciaSaldoP1=$cantidad1;
        }

        $sqlp1e= "update producto set existencia=$existenciaSaldoP1 where codigo=$productoInve;";

        echo $sqlp1e;
        if ($conexion->query($sqlp1e) === TRUE) {
            echo "datos guardados  exitosamente existencia 1";
        } else {
            echo "error en guardar datos: " . $conexion->error;
        }


        $sqlp1inv= "INSERT INTO inventario(existencia_saldo,codigo_producto ,codigo_entrada ,fecha) VALUES ($existenciaSaldoP1,$productoInve,$codigo,$fecha)";

        echo $sqlp1inv;
        if ($conexion->query($sqlp1inv) === TRUE) {
            echo "datos guardados  exitosamente inventario 1";
        } else {
            echo "error en guardar datos: " . $conexion->error;
        }

   }

   header("Location:inventario.php?error=false");
   
}


//producto 2





}





include "cerrar_conexion.php"; 
?>