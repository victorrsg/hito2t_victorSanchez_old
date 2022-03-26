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

    public function start(){
        require_once ('Views/Usuarios/start.php');
    }

    // API SERVICE
    public function register(){
        require_once ('Views/Usuarios/register.php');
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