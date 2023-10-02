<?php   //PanelControl.php  
 session_start(); 

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="author" content="Nilo Rosales">
<link rel="stylesheet"href="ESTILOS.CSS">
<title>PAGINA PRINCIPAL</title>

</head>

<body>

<div class="contenedor"><!--div principal -->
<!-- Begin page content -->
  <h3 class="TITULO">BIENVENIDO A LA PAGINA PRINCIPAL</h3>
  <hr>
  <br>  
  <div >
    <div > 
      <!-- Contenido -->   
<script>      
function Cancelar(lnk)
    {
    var opcion = confirm("¿Está seguro de cerrar sesión?");
    if (opcion) {
      return true;
    }       
	  else {
      return false;
      
    }
	
}

</script>
<?php 
// Verificar si existe una sesión activa del usuario
if(isset($_SESSION["usuario"]))
{  
      // Si la variable de sesión "usuario" existe, entonces se muestra el mensaje de bienvenida al usuario
      echo '<h3 class="bien" >Registro Exitoso, Bienvenido - '.$_SESSION["usuario"].'😎</h3>';  
      // Se muestra el botón para cerrar sesión
      echo '<a href="CerrarSesion.php"><div class="cerrar" onclick="return Cancelar(this)">Cerrar Sesion</div></a>';  
}  
else  
{  
      // Si la variable de sesión "usuario" no existe, entonces se redirige a la página de inicio de sesión
      header("location:LOGIN.PHP");  
} 
 ?>

<h4 class="GAME">JUEGOS</H4>
<div class="oa">


<div class="o1"><h4 class="tl1">  WARZONE 2.0</h4>

   <iframe width="300" height="300" src="https://www.youtube.com/embed/7wX4B0MPUEQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            

    <a class="cc" href="https://www.callofduty.com/es/warzone" target="_blank">DESCARGAR WARZONE 2.0</a>
<br>
</div>
  

    <div class="o1"><h4 class="tl1">GTA V</h4>
        <iframe width="300" height="300" src="https://www.youtube.com/embed/2S4O8Ea6M9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <a class="cc" href="https://www.rockstargames.com/gta-v" target="_blank">DESCARGAR GTA V</a>
<br>
</div>
     
    <div class="o1"><h4 class="tl1">DOTA 2</h4>
    <iframe width="300" height="300" src="https://www.youtube.com/embed/-cSFPIwMEq4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     <a class="cc" href="https://www.dota2.com/home" target="_blank">DESCARGAR DOTA 2</a>
     <br>
    </div>

</div>



</div>


<br> <br>        
      <!-- Fin Contenido --> 
    </div>


  <!-- Fin row --> 
<div class="redes">
<img src="fotos/logoS.png"   height="30px" width="110px"><br> <br>
<p>CONTACTOS:</p><br>
<a href="https://api.whatsapp.com/send?phone=920607230&text=¡Hola Nilo!👍" target="_blanck" ><span ></span><img src="fotos/what3.png"></a>
&nbsp;&nbsp;
<a href="https://www.facebook.com/nilo.rosales.777?mibextid=ZbWKwL" target="_blanck" ><span ></span><img src="fotos/fb.png"></a>
<p class="io">Copyright © 1996–2023 Booking.com™. Todos los derechos reservados-Trabajo Final-@Nilo.RL
</p>
  </div>

  <br> 
</div>
<!-- Fin container -->

</div>

</body>
</html>