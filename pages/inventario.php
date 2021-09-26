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
        <h1> Existencia por producto</h1>
        
        <form action="">
           
            <hr>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Fecha</th>
                        <th>Exitencia Actual</th>
                    </tr>
                </thead>
                <tbody id="listado">
                    
                <?php 
                    include "conexion.php"; 
                        $sql = "select codigo,nombre, existencia from producto as p order by p.codigo asc";
                       // echo $sql;
                        $result = $conexion->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo"<tr>";
                                echo "<td>".$row["codigo"]."</td>";
                                echo "<td>".$row["nombre"]."</td>";
                                echo "<td>".$row["existencia"]."</td>";
                                echo"</tr>";
                            }
                        } else {
                        }
                    include "cerrar_conexion.php"; 
                    ?> 





                </tbody>
            </table>
            
            <br>

        </form>


    </div>
    
</body>
</html>