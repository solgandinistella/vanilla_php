<?php
  $linea = fgets(STDIN);
  $datos = explode(" ", trim($linea));

  $resultado = match ($datos[0]) {
    '+'   => $datos[1]+$datos[2],
    '-'   => $datos[1]-$datos[2],
    'x'   => $datos[1]*$datos[2],
    ':'   => $datos[1]/$datos[2],
    default => 'Símbolo desconocido',
  };

 echo '<p>', $datos[1], ' ', $datos[0], ' ', $datos[2], ' = ', $resultado, '</p>';
?>
