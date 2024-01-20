<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widt, initial-scale=1.0">
    <title>Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </div>
        <div class="container">
            <div class="row align-items-start">
               

        </div>

        <div class="container">
            <div class="row align-items-start">
            <!------------------------------------------------------------->    
                <div class="col">
                    <table class="table">
                        <!---class="table table-striped  table-dark"-->
                        <thead class="bg-warning">
                            <tr>
                                <th>id</th>
                                <th class="text-center">Codigo</th>
                                <th class="text-center">Marca</th>
                                <th class="text-center">clave</th>
                                <th class="text-center">Descripcion</th>
                                <th class="text-center">Usuarios</th>
                                <th class="text-center">Costos</th>
                                <th class="text-center">Factura</th>
                                <!--agregue-->
                              
                                
                                <div>
                                
                                </div>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <h3 class="text-center">ACTIVOS FIJOS</h3> <br>

                        <tbody   class="table table-striped  table-dark">
                            <div>
                                <!--conexion ---->
                                
                                <?php
                                    $con=mysqli_connect("localhost","root","","html"); 
                                    $sql="SELECT * FROM activos";
                                    $query=mysqli_query($con,$sql);
                                ?>
                                <!--fin conexion ---->
                            </div>
                          

                            <!-- arreglo para que cada que me realice la consulta se agregue a cada uno de los campos -->
                                <?php
                                    while($row=mysqli_fetch_array($query)){ 
                                ?>
                                    <tr>
                                    <th><?php echo $row['id']?></th>
                                    <th><?php echo $row['codigo']?></th>
                                    <th><?php echo $row['Marca']?></th>
                                    <th><?php echo $row['Clave']?></th>
                                    <th><?php echo $row['Descripcion']?></th>
                                    <th><?php echo $row['Usuarios']?></th>
                                    <th><?php echo $row['Costos']?></th>
                                    <th><?php echo $row['factura']?></th>    
                                    <!-----SEGUIMIENTO........--->                            
                                  
                                    </tr>
                                <?php
                                    }

                                ?>           
                              
                        
                        <tbody>
                    </tables>
                </div>
            </div>

                
                </div>
                <div class="col">
                One of three columns
                </div>
            </div>
        </div>

</head>
<body>
    
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
        <script src="js/bootstrap.min.css"></script>

</html>