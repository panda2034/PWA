<?php  
include ("model_r/conexion_r.php");
$sentencia = $bd->query("SELECT * FROM papafritas");
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
   

<style>

  
</style>


    <title>Document</title>


</head>
<body   >

<div class="ex2">
  <center>
 <a href="menu.html" target="_blank">Hacer mas comprar</a>
<a href="inicio.html" target="_blank">Cancelar compra</a>
<a href="costo.html" target="_blank">Costo total</a>
</center>
</div>



<table id="customers">
    <?php
        foreach ($usuarios as $papafritas){
        ?>      
  <tr>
    <th>Vevidas</th>
    <th>precio</th>
    <th>selecione cual quiere</th>
</tr>
<tbody>
      <tr>
      <td><?php echo $papafritas->tipo_de_papafritas?> </td>
        <td id="nombreest"><?php echo $papafritas->precio?></td>
        <td>

<button type="button" onclick="captura()" class="button">Comprar</button>

</td>
      </tr>
  </tbody>
<?php
}
?>
</table>

<script src="cap.js" ></script>


</body>
</html>