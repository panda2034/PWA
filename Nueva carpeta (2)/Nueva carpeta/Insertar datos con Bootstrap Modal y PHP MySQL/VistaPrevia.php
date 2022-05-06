<?php  
//select.php  
if(isset($_POST["personal_id"]))
{
 $output = '';
 $connect = mysqli_connect("localhost", "root", "", "php_modallogin");
 $query = "SELECT * FROM personal WHERE id = '".$_POST["personal_id"]."'";
 $result = mysqli_query($connect, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="30%"><label>Personal</label></td>  
            <td width="70%">'.$row["nombres"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Direccion</label></td>  
            <td width="70%">'.$row["direccion"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Genero</label></td>  
            <td width="70%">'.$row["genero"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Designado</label></td>  
            <td width="70%">'.$row["designado"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Edad</label></td>  
            <td width="70%">'.$row["edad"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>
