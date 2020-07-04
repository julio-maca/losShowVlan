<?php session_start();
if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}
$errores='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario=filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password=$_POST['password'];
    $password=hash('sha512',$password);
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=registro', 'root', 'Bazinga02');
    }catch(PODException $e){
        echo "Error" . $e->getMessage();
    }
    $prueba=$conexion->prepare('SELECT * FROM registro WHERE usuario=:usuario AND pass= :password');
    $prueba->execute(array(':usuario'=>$usuario, ':password'=>$password));
    $resultado=$prueba->fetch();
    if($resultado!=false){
        $_SESSION['usuario']=$usuario;
        header('Location:index.php');        
    }else{
        $errores .='<li>Datos incorrectos</li>';
    }

}
require 'views/login.view.php';
?>