<?php
require("conexCompMetal.php");
?>
 <table align="center" border="1" style="width:auto; height:20px;" class="table table-condensed table-bordered table-hover" action="php/consultaAlternativo.php">
    <tr>
      <th>ARTÍCULO</th>
      <th>AUTOR/BANDA/MARCA</th>
      <th>PRECIO</th>
      <th>STOCK</th>
      <th>SELECCIONAR</th>
    </tr>
        <?php
while($registroClasificacion = mysqli_fetch_array($resClasificacion)){

  echo"<tr>
      <td>$registroClasificacion[nombreArticulo]</td>
      <td>$registroClasificacion[autorBandaMarca]</td>
      <td>$registroClasificacion[stock]</td>
      <td>$registroClasificacion[precio]</td>
      <td>$registroClasificacion[idArticulo]</td>
    </tr>";
}

?>
  </table>