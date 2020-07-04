<?php session_start();

if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $usuario= filter_var( strtolower ($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password=$_POST['password'];
    $password2=$_POST['password2'];

     echo "$usuario . $password . $password2";

    $errores='';
    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores .='<li>Porfavor rellena los campos correctamente</li>';
    }else{
        try {
            $conection = new PDO('mysql:host=localhost;dbname=curso_login', 'root', 'julio1212');
        } catch (PDOExeption $e) {
            echo "Error: " . $e->getMessage(); 
        }
        $statement = $conection->prepare('SELECT * FROM usuarios WHERE usuario =: usuario LIMIT 1');
        $statement ->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();
        if ($resultado != false) {
            $errores .= '<li>El nombre de usuario ya existe<li>';
        }
    }
}
require 'views/registrate.view.php';

?>