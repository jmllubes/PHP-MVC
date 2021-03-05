<?php

class llibreController{

    public function index(){

        echo "Pàgina index llibre";
    }

    public function llibreform(){
        require_once "views/llibre/afegirllibre.php";
    }

    public function afegir(){
        
        
    }
    public function default(){

        $con = database::conectar();
        $sql = "SELECT * FROM llibre";
        $result = $con->query($sql);
        echo "<div class='joaquin'>";
        while($fila = $result->fetch_array()){
            ?>
            <div>
            <img src="<?php echo "../assets/img/" . $fila['titol'] . ".jpg";?>" alt="" heigth="150px" width="100px" >
            <h5><?php echo $fila['titol'];?></h5>
            <h6><?php echo $fila['autor'];?></h6>
            </div>
<?php
        }
        echo "</div>";

        
    }

}

?>