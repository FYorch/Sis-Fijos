<?php include("./template/cabecera.php");?>
<?php
?>
<HTML>
 
    <HEAD>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <title> Pagina de inicio </title>
 
    </HEAD>
    <BODY background="Imagenes/12.jpg" width="2500" weight="1000"><br><br>
  
    <p>
        <!--La siguiente linea de codigo inserta una imagen-->
      
        <font size="+3" color="white"></font>
        <font face="georgia" Size="6" Color="white"><br>
            <p>¡BIENVENIDO USERS!</p><br>
            <p>Iniciar Sesi&oacute;n</p> </font><br>
    
    </p>
    
    <!--Para ofrecer un contorno-->
<style>
    #contenedor{width: 260px; height:190px; border:1px solid; background-color:;
    padding-left:3px; padding-top:5px;}

    #form1{font-family:Arial, sans-serif; font-size:13px; color: white;}

    #inp1, #inp3{
        background-repeat:no-repeat;
        border: 10;
        width: 203px;
        height: 26px;
        padding-left: 1px;
        padding-top: 6px;
    }
    #inp10{background-color: white;}
    #inp1{background-image:url(icon/in1.gif)}
    #inp2{background-image:url(icon/in4.gif)}
    #inp3{background-image:url(icon/input7.gif)}
    #inp4{background-image:url(icon/input6.gif)}
    #inp5{background-image:url(icon/in2.gif)}
    #inp8{background-image:url(icon/btninput.gif); cursor:hand;}
</style>


<div align="center" height="10%" >
<div id="contenedor" align="center">
        <form id="form1" method="post" action="./php/valida.php">
            <div id="datos" id="inp10"><br>
                Ingresa tu usuario:<br /><br>
                <input title="Ingresa tu Usuario" id="inp1"
                maxlength="30" name="usuario"
                placeholder="Solo letras y numeros" required/> <br><br />

                Ingresa tu contraseña:<br /><br>
                <input title="Ingresa tu Password" id="inp3"
                maxlength="10" name="password" type="password"
                placeholder="Teclee su contrase&ntilde;a" required/>
                <br />

                <br>
                <div style="float: center; width: 130px">
                    <input type="submit" value="Enviar" name="Enviar"/>
                    <input type="reset" value="Limpiar"/>
                </div>
            </div>
        </form>

</div>

</div>

</BODY>
</HTML>