<h1>Arrays</h1>
<hr/>
<br>
<br>

<?php
  $estados = array("São Paulo", "Rio de Janeiro", "Minas Gerais", "Piauí");

  echo $estados[0]."<br/>";
  echo $estados[3]."<br/>";
  echo $estados[1]."<br/>";
  echo $estados[2]."<br/>";
  echo '<hr/>';



  echo '<h1>Matriz</h1>';

  $matriz = array(
    array("Carro 1", 120000),
    array("Carro 2", 80000),
    array("Carro 3", 56000)
  );

  echo $matriz[0][0] . "- Valor = R$".$matriz[0][1]."<hr/>";
  echo $matriz[1][0] . "- Valor = R$".$matriz[1][1]."<hr/>";
  echo $matriz[2][0] . "- Valor = R$".$matriz[2][1]."<hr/>";


?>