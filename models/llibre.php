<?php
require_once "../config/database.php";

class llibre{

public $Isbn;
public $titol;
public $categoria;
public $preu;
public $editorial;
public $autor;


/**
 * Get the value of Isbn
 */ 
public function getIsbn()
{
return $this->Isbn;
}

/**
 * Set the value of Isbn
 *
 * @return  self
 */ 
public function setIsbn($Isbn)
{
$this->Isbn = $Isbn;

return $this;
}

/**
 * Get the value of titol
 */ 
public function getTitol()
{
return $this->titol;
}

/**
 * Set the value of titol
 *
 * @return  self
 */ 
public function setTitol($titol)
{
$this->titol = $titol;

return $this;
}

/**
 * Get the value of categoria
 */ 
public function getCategoria()
{
return $this->categoria;
}

/**
 * Set the value of categoria
 *
 * @return  self
 */ 
public function setCategoria($categoria)
{
$this->categoria = $categoria;

return $this;
}

/**
 * Get the value of preu
 */ 
public function getPreu()
{
return $this->preu;
}

/**
 * Set the value of preu
 *
 * @return  self
 */ 
public function setPreu($preu)
{
$this->preu = $preu;

return $this;
}

/**
 * Get the value of editorial
 */ 
public function getEditorial()
{
return $this->editorial;
}

/**
 * Set the value of editorial
 *
 * @return  self
 */ 
public function setEditorial($editorial)
{
$this->editorial = $editorial;

return $this;
}

/**
 * Get the value of autor
 */ 
public function getAutor()
{
return $this->autor;
}

/**
 * Set the value of autor
 *
 * @return  self
 */ 
public function setAutor($autor)
{
$this->autor = $autor;

return $this;
}


}




?>