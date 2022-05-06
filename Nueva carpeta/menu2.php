<?php  
include ("model_r/conexion_r.php");
$sentencia = $bd->query("SELECT * FROM menu");
$usuarios= $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($usuarios); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>

    <style>

    li{
      
    }


    </style>
</head>
<body>
<div class="menu">
  
  <div class="heading">
    <h1>Zisu</h1>
    <h5>&#126; Menu &#126;</h5>
  </div>
</div> 

     <div class="container mt-3">
  <table class="table table-bordered table-sm">
   
       <thead>
        <th>Hamburguesa</th>
        <th>frituras</th>
        <th>pasta</th>
        <th>picada</th>
        <th>bebida sin alcohol</th>
        <th>bebida con alcohol</th>
        <th>precio</th>
        </thead> 
       
<tbody>
   <?php
        foreach ($usuarios as $menu){
        ?>
   
<td><?php echo $menu->hamburguesa?><li><?php echo $menu->total?></li><a href="inicio.php"></a></li></td>

    
<td><?php echo $menu->frituras?></td>
   
<td><?php echo $menu->pasta?> </td>
    
<td><?php echo $menu->picada?></td>
     
<td><?php echo $menu->bebida_sin_alcohol?></td>
    
<td><?php echo $menu->bebida_con_alcohol?></td>
   

  </tbody>
  </table>
</div>

<?php
}
?>

</table>



   
     
  

</body>
</html>