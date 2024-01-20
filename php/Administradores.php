<?php
  $mysql=new mysqli('localhost','root','','html');

  $sql="SELECT * FROM tbl_users";

  if (isset($_POST['buscar'])) {
    $nombre=$_POST['nombre'];
    $sql="SELECT * FROM tbl_users WHERE tx_nombre LIKE '%$nombre%' OR tx_apellidoPaterno LIKE '%$nombre%' OR tx_apellidoMaterno LIKE '%$nombre%' OR tx_correo LIKE '%$nombre%' OR tx_username LIKE '%$nombre%'";
  }

  if (isset($_POST['filtro'])){
    switch ($_POST['filtro']) {
        case 'M_todos':
        $sql="SELECT * FROM tbl_users";
      break;
        case 'D_nombre':
        $sql = "SELECT * FROM tbl_users WHERE tx_nombre LIKE '%$nombre%'";
      break;
        case 'F_apellido':
        $sql = "SELECT * FROM tbl_users WHERE tx_apellidoPaterno LIKE '%$nombre%'";
    }
  }
  $query=mysqli_query($mysql,$sql);


//---------------------------------variables-----------------------------//
/*
$where="";
$nombre=$_POST['xnombre'];
$apellido=$_POST['apellido'];
$limit=$_POST['xregistros'];
//-------------------------------Buscar-------------------------------//
if(isset($_POST['buscar']))
{
    if(empty( $_POST['apellido']))
    {
        $where="where nombre like '".$nombre."%'";
    }
    else if (empty($_POST['xnombre'])){
        $where="where apellido='".$apellido."'";

    }

    else
    {
        $where="where nombre like '".$nombre."%' and ApellidoP='".$ApellidoP."'";
    }
}*/

include("conexion.php");
$conexion=conectar();
$sql="SELECT * FROM tbl_users"; #$where $limit
$query=mysqli_query($conexion,$sql);
#$resFiltro=mysql_query($conexion,$sql);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administradores</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--pendiente-->
<body  background="../Imagenes/gby.jpg" width="2500" weight="1000"> <!---../Imagenes/4.jpg--->
     <!--pendiente-->
<?php 
//Invalida el copiar y pegar URL Si No Hay Sesion Reenvia A La Pagina De Inicio
@session_start();
if($_SESSION['existe'] != 'SI'){
    header('Location: ../../index.php');
    exit(0);

session_start();
if(!isset($_SESSION['existe']) || ($_SESSION['existe'] != 'SI')){
 header('Location: ../../index.php');
 exit(0);
}
}
?>


<html> 
<head>
    <div class="container-fluid"><br>
        <font face="georgia">
            <div class="row vh-25  justify-content-around aling-items-center">          
                <div class="col-sm-2"></div><br>
                <div class="col-sm-4 p-2  border border-2 text-success ">Bienvenido Administrador 
                <?php 
                $usuarioactual=$_SESSION ['tx_username']; echo  " ¡ ","  ",$usuarioactual," !"
                ?>
                </div>
            </div>
             </font>
            </head>
                <div class="row align-items-center">
                            <div class="col">
                            <div class="p-3 mb-2 text-success">
                                    <?php 
                                    $time = time(); echo "fecha: " .date("d-m-Y");
                                    ?>
                                </div>
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col"></div>
                        
                </div>
     </div>

    
</div>

<!--- salir session---->
    <div class="row align-items-center">
    <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col">
                             <!---Terminar sesion--->
                            <form action="./salir.php" method="post">
                                <input type="SUBMIT" value="Cerrar Sesi&oacute;n" />
                            </form>
                             <!------->
                             </div>
    </div><br>


<!--- fin salir session---->

<!--Inicia contenedor busqueda ---->

    <div class="row align-items-center">
        <div class="container-row"></div>
        <div class="col-5">
            <form class="d-flex">
                <form action="" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Datos a buscar " 
                    name="serch"> <br>
                    <button class="btn btn-success bg-success" type="submit" name="enviar"> <b>Buscar </b> </button> 
                </form>
        </form>
        </div>
        <div class="col"></div>
    </div>
<!-- fin busqueda ---->
<?php
$conexion=mysqli_connect("localhost","root","","html"); 
$where="";

if(isset($_GET['enviar'])){
  $serch = $_GET['serch'];


	if (isset($_GET['serch']))
	{
		$where="WHERE tbl_users.tx_nombre LIKE'%".$serch."%' OR tx_apellidoPaterno  LIKE'%".$serch."%' OR tx_apellidoMaterno  LIKE'%".$serch."%' OR tx_correo  LIKE'%".$serch."%' OR tx_username  LIKE'%".$serch."%'
    OR id_tipousuario  LIKE'%".$serch."%'" ;
	}
   
}



?>

<!---inicio de filtro cunsulta---->

        <section>
                    <form action="" method="post">
                        <select name="filtro" id="">
                            <option value="">Elige </option>
                            <option value="nombres">Nombre</option>
                            <option value="apellido">Apellido Paterno</option>
                        </select>
                        <input type="text" name="nombre" id="buscador">
                        <input type="submit" value="Buscar" name="buscar">
                    </form>
                    

        </section>
<!---fin de filtro cunsulta---->

</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-2">
                    <table class="table">
                        <!---class="table table-striped  table-dark"-->
                        <thead class="bg-warning">
                            <tr>
                                <th>N</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellido Paterno</th>
                                <th class="text-center">Apellido Materno</th>
                                <th class="text-center">Correo</th>
                                <th class="text-center">Usuario</th>
                                <th class="text-center">Contraseña</th>
                                <th class="text-center">Tipo de Usuario</th>
                                <!--agregue-->
                                <th class="text-center">fecha</th>
                                
                                <div>
                                
                                </div>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody   class="table table-striped  table-dark">
                            <div>
                                <!--conexion ---->
                                <?php
                                    $con=mysqli_connect("localhost","root","","html"); 
                                    $sql="SELECT * FROM tbl_users $where";
                                    $query=mysqli_query($con,$sql);
                                ?>
                                <!--fin conexion ---->
                            </div>
                          

                            <!-- arreglo para que cada que me realice la consulta se agregue a cada uno de los campos -->
                                <?php
                                    while($row=mysqli_fetch_array($query)){ 
                                ?>
                                    <tr>
                                    <?php $M=$row['id_tipousuario']?>
                                    <th><?php echo $row['id_usuario']?></th>
                                    <th><?php echo $row['tx_nombre']?></th>
                                    <th><?php echo $row['tx_apellidoPaterno']?></th>
                                    <th><?php echo $row['tx_apellidoMaterno']?></th>
                                    <th><?php echo $row['tx_correo']?></th>
                                    <th><?php echo $row['tx_username']?></th>
                                    <th><?php echo $row['tx_password']?></th>
                                    <th><?php $row['id_tipousuario']?><?php if ($M==1){echo 'admin';} if ($M == 2){echo 'users';}?></th>
                                    <th><?php echo $row['dt_registros']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['id_usuario']?>" class="btn btn-success">Editar</a></th>
                                    <th><a href="eliminar.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-danger">Eliminar</a></th>
                                    </tr>
                                <?php
                                    }

                                ?>

                                
                                
                        <tbody>
                    </tables>
                </div>

            </div>

        </div>

        <div>

                           <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Agregar nuevo
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header bg-info ">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registros de Usuarios</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-6  bg-success p-2 text-dark bg-opacity-10">
                       
                                        <h3>Datos requeridos</h3>
                                            <form action="insertar.php" method="POST">
                                                <label for="..">Nombre:</label>
                                                <input type="text" class="form-control mb-3" name="tx_nombre" placeholder="Nombre" required="True">
                                                <label for="..">Apellido Paterno:</label>
                                                <input type="text" class="form-control mb-3" name="tx_apellidoPaterno" placeholder="Apellido Paterno">
                                                <label for="..">Apellido Materno:</label>
                                                <input type="text" class="form-control mb-3" name="tx_apellidoMaterno" placeholder="Apellido Materno">
                                                <label for="..">Correo:</label>
                                                <input type="text" class="form-control mb-3" name="tx_correo" placeholder="Correo" required="True">
                                                <label for="..">Usuario:</label>
                                                <input type="text" class="form-control mb-3" name="tx_username" placeholder="Username" required="True">
                                                <label for="..">Contraseña:</label>
                                                <input type="password" class="form-control mb-3" name="tx_password" placeholder="Contraseña">
                                                <select name="id_tipousuario" id="">
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Usuario</option>
                                                </select> 

                                                <input type="submit" class="btn btn-info">
                                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                        <!--<button type="button" class="btn btn-primary"></button>--->
                    </div>
                    </div>
                </div>
                </div> 

        </div>

      
            <!---PDF---->
        <div class="row align-items-center"> 
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
                <button  type="button"  class="btn btn-danger"  onclick="location.href='gpdf.php'">
                Generar PDF
                </button>
             </div>
        </div><br>
        <!--FIN-PDF---->

      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
    <script src="js/bootstrap.min.css"></script>

</body>
</html>