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

    public function register(){
        require_once ('Views/Usuarios/register.php');
    }

    public function start(){
        require_once ('Views/Usuarios/start.php');
    }

    // API SERVICE: Métodos CRUD

    public function save(){
        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $foto=$_POST['foto'];

        if($_POST['contraseña']==$_POST['repContraseña']){
            $contraseña=password_hash($_POST['contraseña'],PASSWORD_DEFAULT);
            $conexion=DB::getConnect();
            $insertar=$conexion->query("call registrar_usuario('$nombre','$contraseña','$correo','$foto')");

            $user=new usuarioComun();

            $this->iniciar($user);

            require_once ('Views/Usuarios/start.php');

        }
        else{
            echo '<script type="text/javascript">
            alert("Las contraseñas no coinciden");
            window.location.href="index.php?controller=usuarioComun&action=register";
            </script>';
        }

    }



    public function iniciar(){
        session_start();

        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];

        $usuario=$this->obtenerUsuario($nombre, $contraseña);
        if ($usuario->getId() != NULL) {
            $_SESSION['usuarioComun'] = $usuario;
            header('location:Views/Usuarios/info.php');
        } else {
            echo '<script type="text/javascript">
            alert("El nombre de usuario o la contraseña son incorrectos");
            window.location.href="index.php?controller=usuarioComun&action=start";
            </script>';
        }

    }


    public function obtenerUsuario($nombre, $contraseña){
        $db=DB::getConnect();
        $select=$db->prepare('SELECT * FROM usuariocomun WHERE nombre=:nombre');
        $select->bindValue('nombre',$nombre);
        $select->execute();

        $registro=$select->fetch();
        $usuario=new usuarioComun();
        if (password_verify($contraseña, $registro['contraseña'])) {
            $usuario->setId($registro['id']);
            $usuario->setNombre($registro['nombre']);
            $usuario->setContraseña($registro['contraseña']);
            $usuario->setCorreo($registro['email']);
            $usuario->setFoto($registro['foto']);

        }
        return $usuario;

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