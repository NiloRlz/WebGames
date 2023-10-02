
<?php
 session_start();
include("CONEXION.PHP");
 try
 {    
      if(isset($_POST["b"]))  //Si se ha enviado el formulario de login
      {  
           if(empty($_POST["u"]) || empty($_POST["p"]))  //Si algún campo está vacío
           {  
                $message = '<label>Todos los campos son requeridos</label>';  //Mostrar mensaje de error
           }  
           else  
           {  
                $query = "SELECT * FROM usuarios WHERE usuario = :username AND contrasena = :password";//Consulta para buscar usuario y contraseña en la base de datos 
                $statement = $pdo->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["u"],  
                          'password'     =>     $_POST["p"]  
                     )  
                );  
                $count = $statement->rowCount();  //Obtener el número de filas que devuelve la consulta
                if($count > 0)  //Si se encontró al menos un usuario y contraseña en la base de datos
                {  
                     $_SESSION["usuario"] = $_POST["u"];  //Guardar el nombre de usuario en la sesión                  
                  
                     header("location:PanelControl.php
 
                     
                     ");  //Redirigir al usuario a la página de panel de control
                }  
                else  
                {  
                     $message = '<label>Nombre o contraseña incorecta</label>';  //Mostrar mensaje de error
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  




<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">

        <link rel="stylesheet"href="st.css">
     

    <title>INICIAR SESION</title>
</head>
<body>
    <div class="block glow">


<h1 class="titulo">LOGIN</h1>
   

        <?php  
        if(isset($message))  
        {  
            echo '<label class="text">'.$message.'</label>';  
            
        }  
        ?> 
<br><br>


        <form method="post">
            <input type="text" name="u" placeholder="Username" required="required" />
            <br>
            <input type="password" name="p" placeholder="Password" required="required" />
            <br>
            <button class="enviar" name="b" type="submit">INICIAR</button>
            <br><br>
        </form>
        <div class="logg">
            <a href="REGIS.PHP" class="logg"><span ></span>¿Aun no tienes una cuenta? Entra aqui</a>
       <br><br>

        </div>
        <br>

 
  

    </div>

</div>
</body>
</html>