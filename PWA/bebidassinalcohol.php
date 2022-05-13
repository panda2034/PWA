<?php  
session_start();
include ("model_r/conexion_r.php");
$sentencia = $bd->query("SELECT * FROM bebidassinalcohol");
$usuarios= $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($usuarios); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carta.css">
  <!--links -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Document</title>


</head>
<body>


<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large"> Pedidos &times;</button>
 
<?php
$total=0;
    if (isset($_SESSION["carrito"])) {
        
    foreach ($_SESSION["carrito"] as $indice => $arreglo){
 echo "<hr>";
        echo"producto:" .$indice." <br> ";
        
        $total += $arreglo ["cant"] * $arreglo["precio"];
      
        foreach($arreglo as $key => $value){
        
            echo $key. ": ". $value. "<br>";
    }
    }
    echo "el total es $total";
    }else {

    echo "<script>alert('el carrito esta vacio');</script>";


?>   


<?php

}

if(isset($_REQUEST["vaciar"])){
    session_destroy();
    header("location:carrito.php");
}
?>
<hr>

<center>
<a href="carrito.php?vaciar=true">vaciar carrito</a> 
<a href="menu.php">hacer mas pedidos</a>
</center>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
  <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
</svg></button>  <span >Bebidas sin alcohol</span> 
 <a href="Menu.php" class="w3-bar-item w3-button">Menu principal</a>
   
   <a href="carrito.php?vaciar=true" class="w3-bar-item w3-button">Cancelar</a>



<table id="customers">
    <?php
        foreach ($usuarios as $bebidassinalcohol){
        ?>      
  <tr>
    <th>Vevidas</th>
    <th>precio</th>
     <th>cantidad</th>
    <th>selecione cual quiere</th>
</tr>
<tbody>
      <tr>


  <form action="bebidassinalcohol.php" method="post">   
  <td>  
    <input type="hidden" name="producto" value="<?php echo $bebidassinalcohol->bebidassinalcohol?>"><?php echo $bebidassinalcohol->bebidassinalcohol?> 
  </td>
  <td>
    <input type="hidden" name="precio" value="<?php echo $bebidassinalcohol->precio?>"><?php echo $bebidassinalcohol->precio?>
    </td>  
    <td>
    <center><input type="number" name="cant" value="1" style="width:50px"></center>
    </td>
    <td>  
    <input type="submit"  name="btnAgregar" value="agregar" class="button"></input>
  </td>  
  </form>

      </tr>
  </tbody>
<?php
}
?>

<?php
if(isset ($_REQUEST["btnAgregar"])) {
  $producto = $_REQUEST["producto"];
  $cantidad = $_REQUEST["cant"];
  $precio = $_REQUEST["precio"];
  
  $_SESSION["carrito"][$producto]["cant"]=$cantidad;
  $_SESSION["carrito"][$producto]["precio"]= $precio;

    echo "<script>alert('producto $producto tomado')</script>";
}
?>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</table>




</body>
</html>