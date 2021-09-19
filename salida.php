<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
    <script src="../js/scrip.js"></script>

</head>
<body>

    <br>
    <br>
    <div class="container">
        <h1> Movimiento de Salida Ventas</h1>
        
        <form action="guardarSalida.php" method="post">
            <label for="Codigo">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo">

            <label for="Nombre">Nit Cliente</label>
            <input type="text" class="form-control" id="nit" name="nit">

            <label for="Nombre">Nombre Cliente</label>
            <input type="text" class="form-control" id="nombre" name="nombre">

            <label for="Precio">Fecha Compra</label>
            <input type="date" class="form-control" id="fecha" name="fecha" >

            <br>
            <hr>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>total</th>
                    </tr>
                </thead>
                <tbody id="listado">
                    <tr>
                        <td>
                            <input type="number" class="form-control" id="codigo1" name="codigo1">
                        </td>
                        <td>
                            <select id="producto1" name="producto1" >
                            <?php 
                            include "conexion.php"; 
                                $sql = "SELECT codigo,nombre FROM producto order by codigo";
                                echo $sql;
                                $result = $conexion->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option Value='".$row["codigo"]."' >".$row["nombre"]."</option>";
                                    }
                                } else {
                                    echo "<option Value='0' >Sin Productos</option>";
                                }
                            include "cerrar_conexion.php"; 
                            ?> 

                            </select>
                        </td>
                        <td>
                            <input type="number" class="form-control" id="cantidad1" name="cantidad1">
                        </td>
                        <td>
                            <input type="number" class="form-control" id="precio1" name="precio1">
                        </td>
                        <td>
                            <input type="number" class="form-control" id="total1" name="total1">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="number" class="form-control" id="codigo2" name="codigo2">
                        </td>
                        <td>
                            <select id="producto2" name="producto2" >
                            <?php 
                            include "conexion.php"; 
                                $sql = "SELECT codigo,nombre FROM producto order by codigo";
                                echo $sql;
                                $result = $conexion->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option Value='".$row["codigo"]."' >".$row["nombre"]."</option>";
                                    }
                                } else {
                                    echo "<option Value='0' >Sin Productos</option>";
                                }
                            include "cerrar_conexion.php"; 
                            ?> 

                            </select>
                        </td>
                        <td>
                            <input type="number" class="form-control" id="cantidad2" name="cantidad2">
                        </td>
                        <td>
                            <input type="number" class="form-control" id="precio2" name="precio2">
                        </td>
                        <td>
                            <input type="number" class="form-control" id="total2" name="total2">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="number" class="form-control" id="codigo3" name="codigo3">
                        </td>
                        <td>
                            <select id="producto3" name="producto3" >
                            <?php 
                            include "conexion.php"; 
                                $sql = "SELECT codigo,nombre FROM producto order by codigo";
                                echo $sql;
                                $result = $conexion->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option Value='".$row["codigo"]."' >".$row["nombre"]."</option>";
                                    }
                                } else {
                                    echo "<option Value='0' >Sin Productos</option>";
                                }
                            include "cerrar_conexion.php"; 
                            ?> 

                            </select>
                        </td>
                        <td>
                            <input type="number" class="form-control" id="cantidad3" name="cantidad3">
                        </td>
                        <td>
                            <input type="number" class="form-control" id="precio3" name="precio3">
                        </td>
                        <td>
                            <input type="number" class="form-control" id="total3" name="total3">
                        </td>
                    </tr>

                </tbody>
            </table>
            
            <br>

            <input type="submit" 
            value="Guardar" 
            class="btn btn-success" >

        </form>


    </div>
    
</body>
</html>