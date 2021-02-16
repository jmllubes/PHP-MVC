<?php

class database{

    public static function conectar(){
        $connexio = new mysqli("localhost","root","","llibrephp");
        $connexio->query("SET  NAMES 'utf8'");
        return $connexio;
    } 


}




?>