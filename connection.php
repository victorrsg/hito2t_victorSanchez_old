<?php
class DB{

    public static function getConnect(){
        $conectar=new PDO('mysql:host=localhost; dbname=hito2','root','');
        return $conectar;
    }

}// cierra clase
