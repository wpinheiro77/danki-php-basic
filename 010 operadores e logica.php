<h1>Operadores lógicos e matemáticos</h1>
============================
<br>
<br>

<?php
  $v1 = 10;
  $v2 = 20;
  $v3 = 30;

  if ($v1 > $v2) {
    echo 'V1 é maior';
  }

  echo '<br/>';

  if ($v1 < $v2) {
    echo 'V1 é menor';
  }

  echo '<br/>';

  if ($v1 <= $v2) {
    echo 'V1 é menor ou igual a v2';
  }

  echo '<br/>';

  if ($v1 >= $v2) {
    echo 'V1 é maior ou igual a v2';
  }

  echo '===================';

  if (($v1 == $v2) && ($v2 > $v3)) {
    echo 'verdade';
  }

  echo '<br/>';

  if (($v1 == $v2) || ($v2 < $v3)) {
    echo 'verdade';
  }

  echo '<br/>';




?>