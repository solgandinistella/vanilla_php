 <?php
   $ciclos = ['DAW', 'DAM'];
   $ciclos[] = 'ASIR';

   echo '<p>Número de ciclos: ', count($ciclos), '</p>';
   echo '<p>', in_array('SMR', $ciclos, true) ? 'SMR ofertado' : 'SMR no ofertado', '</p>';
 ?>

 <?php
  $ciclo = [
    'codCiclo' => 'DAW',
    'nombre'   => 'Desarrollo de Aplicaciones Web',
    'modulos'  => [
      '0612' => 'Desarrollo web en entorno cliente',
      '0613' => 'Desarrollo web en entorno servidor',
      '0614' => 'Despliegue de aplicaciones web',
      '0615' => 'Diseño de interfaces web',
    ],
  ];

  echo $ciclo['modulos']['0613'];   // Desarrollo web en entorno servidor
  echo "<pre>", print_r($ciclo),"</pre>"
?>

