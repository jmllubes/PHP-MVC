<?php 
require_once "../config/database.php";


class usuari{
    public $dni;
    public $nom;
    public $telefon;
    public $correu;
    public $contrasenya;
    public $rol;
    public $db;

    public function mostrar(){
        $db = database::conectar();
    }

    public function __construct($dni,$nom,$telefon,$correu,$contrasenya,$rol) {
        $this->dni = $dni;
        $this->nom = $nom;
        $this->telefon = $telefon;
        $this->correu = $correu;
        $this->contrasenya = $contrasenya;
        $this->rol = $rol;

      }
    
    public function insertar(){
        $con = database::conectar();
        

    }

    public function getdni(){
        return $this->dni;
    }
    public function getnom(){
        return $this->nom;
    }
    public function gettelefon(){
        return $this->telefon;
    }
    public function getcorreu(){
        return $this->correu;
    }

    public function setdni($dni){
        $this->dni = $dni;
    }
    public function setnom($nom){
        $this->nom = $nom;
    }
    public function settelefon($telefon){
        $this->telefon = $telefon;
    }
    public function setcorreu($correu){
        $this->correu= $correu;
    }

    


    /**
     * Get the value of contrasenya
     */ 
    public function getContrasenya()
    {
        return $this->contrasenya;
    }

    /**
     * Set the value of contrasenya
     *
     * @return  self
     */ 
    public function setContrasenya($contrasenya)
    {
        $this->contrasenya = $contrasenya;

        return $this;
    }

    /**
     * Get the value of rol
     */ 
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @return  self
     */ 
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }
}

?>

    


