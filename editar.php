       <?php
include("conexion.php");
?>
       <!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">
            <title>Junior</title>
            <link rel="stylesheet" href="css/main.css">
        </head>
        <body>
        <header>
    <div class="contenedor">
        <h1 class="icon-dog">Junior703</h1>
        <input type="checkbox" id="menu-bar">
        <label class="fontawesome-align-justify" for="menu-bar"></label>
                <nav class="menu">
                    <a href="index.html">Inicio</a>
                    <a href="agregar.php">Agregar</a>
                    <a href="editar.php">Editar</a>
                    <a href="borrar.php">Borrar</a>
                </nav>
            </div>
</header>
        
        <main>
 
            
            
            <section id="info">
                <h3><br></br>Seccion Editar.</h3>
                <div class="contenedor">
                    <div class="info-pet">
                     <img src="jr.jpg" alt="">
                        <h4> Busqueda de datos </h4>
        <i><h3> Favor de introducir el Id del producto </h3></i>
       
  <div id="leo">
<section id="leon">

<section id="leone">



<!--DE AQUI COMIENZA SI DESEAR COPIAR A TU SITIO WEB TOMALO COMO SI EMPEZARAS DESDE BODY-->

<?php
$var="";
$var1="";
$var2="";
$var3="";
$var4="";

if(isset($_POST["btn1"])){
  $btn=$_POST["btn1"];
  $bus=$_POST["txtbus"];
  if($btn=="Buscar"){
    
    $sql="select * from productos where id_producto='$bus'";
    $cs=mysql_query($sql,$cn);
    while($resul=mysql_fetch_array($cs)){
      $var=$resul[0];
      $var1=$resul[1];
      $var2=$resul[2];
      $var3=$resul[3];
      $var4=$resul[4];
      }
      if($var4=="Masculino"){
        $var4="selected";
        }
      
    }
  
  

  if($btn=="Actualizar"){
    $cod=$_POST["txtcod"];
    $nom=$_POST["txtnom"];
    $ape=$_POST["txtape"];
    $tel=$_POST["txttexi"];
    $sex=$_POST["txttepc"];
    $bex=$_POST["txttepv"];
    
    $sql="update productos set producto='$nom',descripcion='$ape',existencias='$tel',precio_compra='$sex',precio_compra='$bex' where id_producto='$cod'";
    
    $cs=mysql_query($sql,$cn);
    echo "<script> alert('Se actualizo correctamente');</script>";
    }
    }
  

?>
<form name="fe" action="" method="post">
<center>
<table border="2">
<tr>
<td>Buscar</td>
<td><input type="text" name="txtbus"/></td>
<td><input type="submit" name="btn1"  value="Buscar"  /></td>
</tr></table>

<table border="2">
<tr>
<td>Codigo</td>
<td><input type="text" name="txtcod" value="<?php echo $var?>" /></td>
</tr>

<tr>
<td>Producto</td>
<td><input type="text" name="txtnom"  value="<?php echo $var1?>"/></td>
</tr>
<tr>
<td>Descripcion</td>
<td><input type="text" name="txtape"  value="<?php echo $var2?>"/></td>
</tr>
<tr>
<td>Existencias;</td>
<td><input type="text" name="txttexi"  value="<?php echo $var3?>"/></td>
</tr>
<td>Precio Compra;</td>
<td><input type="text" name="txttepc"  value="<?php echo $var4?>"/></td>
</tr>
<td>Precio Venta;</td>
<td><input type="text" name="txttepv"  value="<?php echo $var4?>"/></td>
</tr>



</tr>

<tr align="center">
<td colspan="2"><input type="submit" name="btn1" value="Nuevo"/>
<input type="submit" name="btn1" value="Listar"/>
</td>
</tr>
<tr align="center"><td colspan="2"><input type="submit" name="btn1" value="Actualizar"/><input type="submit" name="btn1"value="Eliminar"/>
<input type="submit" name="btn1"value="Agregar"/></td></tr>

</table>

</center>
<br />
<hr>
</form>
<br />



</section>
</section>
<section id="rojas">

        <footer>
            <div class="contenedor">
                <p class="copy">Junior703 &copy; 2017</p>
                <div class="sociales">
                    <a class="fontawesome-facebook-sign" href="#"></a>
                    <a class="fontawesome-twitter" href="#"></a>
                    <a class="fontawesome-camera-retro" href="#"></a>
                    <a class="fontawesome-google-plus-sign" href="#"></a>
                </div>
            </div>
        </footer>
        </body>
        </html>