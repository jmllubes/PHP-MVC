<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Header -->
<div class="header">
  <h1>La meva llibreria</h1>
  <p>Els millor llibres per desconnectar.</p>
</div>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="#">Inici</a>
  <a href="#">Fantasia</a>
  <a href="#">Humor</a>
  <a href="#">Autoajuda</a>
</div>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <ul>
    <li><a href="">Login</a></li>
    <li><a href="">Registre</a></li>
    </ul>

    
  </div>
  <div class="main">
    <h2>LLIBRES</h2>

  <?php
  require_once "config/database.php";
  require_once "autoload.php";
  if(isset($_GET['controller'])){
    $nom_controlador = $_GET['controller'] . "Controller";

  if(class_exists($nom_controlador)){
    $controlador = new $nom_controlador();

    if(isset($_GET['action']) && method_exists($controlador,$_GET['action'])){
      $action = $_GET['action'];
      $controlador->$action();

    }else{
      echo "No existeix el metode";
    }

  }
  else{
    echo "Error nom controlador";
  }
  }
?>

      </div>
</div>

<!-- Footer -->
<div class="footer">
  <h2>Footer</h2>
</div>


</body>
</html>
