<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

        <link rel="stylesheet"href="st.css">

    <title>REGISTRO:D</title>
</head>
<body>


<?php 
 session_start();
 include("CONEXION.PHP");


if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $username = $_POST['u'];
        $email = $_POST['e'];
        $contrasena = $_POST['p'];
    
        $stmt = $pdo->prepare("INSERT INTO usuarios(usuario, email, contrasena) VALUES(:username, :email, :contrasena)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':contrasena', $contrasena);
    
    
        $stmt->execute();
    
    
    }catch(PDOException $a){
        echo "Eror al registrar: " . $a->getMessage();
      
    }
  
}


?>



    <div class="block glow">
<br>
        <h1 class="titulo">REGISTRAR</h1><br>

        <form method="POST">
            <input type="text" name="u" for="username" placeholder="Username" required="required" />
            <br>
            <input type="text" name="e" for="email" placeholder="Email" required="required" />
            <br>
            <input type="password" name="p" for="contrasena" placeholder="Password" required="required" />

            <br>
            <button class="enviar" type="submit" id="clic">CREAR</button>
            <br><br><br>
        </form><br>
       
            <a href="LOGIN.PHP" class="logg"><span ></span> ¿Ya tienes una cuenta?</a>
     

     
    </div>

</div>
</body>
</html>