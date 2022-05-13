<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/total.css">
    <title>Document</title>

</head>
<body>
    <main>

    <?php
session_start();
?>

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
    <main>
</body>
</html>