<?php
require_once "../config/database.php";

class prestec{

    public $codi;
    public $isbn;
    public $dni;
    public $data_prestec;
    public $data_retorn;
    public $retornat;



    /**
     * Get the value of codi
     */ 
    public function getCodi()
    {
        return $this->codi;
    }

    /**
     * Set the value of codi
     *
     * @return  self
     */ 
    public function setCodi($codi)
    {
        $this->codi = $codi;

        return $this;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */ 
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get the value of data_prestec
     */ 
    public function getData_prestec()
    {
        return $this->data_prestec;
    }

    /**
     * Set the value of data_prestec
     *
     * @return  self
     */ 
    public function setData_prestec($data_prestec)
    {
        $this->data_prestec = $data_prestec;

        return $this;
    }

    /**
     * Get the value of data_retorn
     */ 
    public function getData_retorn()
    {
        return $this->data_retorn;
    }

    /**
     * Set the value of data_retorn
     *
     * @return  self
     */ 
    public function setData_retorn($data_retorn)
    {
        $this->data_retorn = $data_retorn;

        return $this;
    }

    /**
     * Get the value of retornat
     */ 
    public function getRetornat()
    {
        return $this->retornat;
    }

    /**
     * Set the value of retornat
     *
     * @return  self
     */ 
    public function setRetornat($retornat)
    {
        $this->retornat = $retornat;

        return $this;
    }
}


?>