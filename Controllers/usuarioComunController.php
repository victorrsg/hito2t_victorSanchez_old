<?php
class usuarioComunController{

    public function __construct()
    {
    }


    public function error(){
        require_once ('Views/Usuarios/error.php');
    }

    public function index(){
        require_once ('Views/Usuarios/index.php');
    }


    // API SERVICE: Métodos CRUD

    public function register(){
        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $foto=$_POST['foto'];

        if($_POST['contraseña']==$_POST['repContraseña']){
            $contraseña=password_hash($_POST['contraseña'],PASSWORD_DEFAULT);
        }

        $conexion=DB::getConnect();
        $insertar=$conexion->query("call registrar_usuario('$nombre','$contraseña','$correo','$foto')");

        require_once('Views/Usuarios/start.php');
    }


    public function delete(){

    }

    public function info(){
        require_once ('Views/Usuarios/info.php');
    }

    public function modify(){
        require_once ('Views/Usuarios/error.php');
    }


}// cierra clase