<?php 
require_once "../models/usuari.php";

class usuariController{

    public function index(){

        echo "Pàgina index usuari";
    }
    public function afegir(){

        if(isset($_POST)){
            $dni= $_POST['dni'];
            $nom= $_POST['nom'];
            $telefon= $_POST['telefon'];
            $correu= $_POST['correu'];
            $contrasenya= $_POST['password'];
            $rol= "admin";
            $usuari = new usuari($dni,$nom,$telefon,$correu,$contrasenya,$rol);
            $usuari->insertar();
        }

    }


}
?>