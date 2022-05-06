<?php  
include ("model_r/conexion_r.php");
$sentencia = $bd->query("SELECT * FROM picada");
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
        foreach ($usuarios as $picada){
        ?>      
  <tr>
    <th>Vevidas</th>
    <th>precio</th>
    <th>selecione cual quiere</th>
</tr>
<tbody>
      <tr>
      <td><?php echo $picada->picada?> </td>
        <td ><?php echo $picada->precio?></td>
        <td>

<button class="button">Comprar</button>

</td>
      </tr>
  </tbody>
<?php
}
?>
</table>




</body>
</html>