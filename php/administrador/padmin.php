<!-- <?php 
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
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<titlt> Inicio Administrador </title>
</head>
<body background="white">
<?php 
$time = time(); echo "La fecha actual es: " .date("d-m-Y");
?>

<BR>
<form action="../salir.php" method="post">
<input type="submit" value="Cerrar Sesi&oacute;n" />
</form>
</div>

<br> <br>
Bienvenido Administrador
<?php 
$usuarioactual=$_SESSION ['tx_username']; echo ">",$usuarioactual,"<"
?>
</body>
</html> -->