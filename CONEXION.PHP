<?php 
$host = 'localhost';
$dbname = 'basen';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Error al ingresar a la base de datos: " . $e->getMessage();
}


?>
