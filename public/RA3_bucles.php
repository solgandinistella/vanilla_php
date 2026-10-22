<?php
// Bucle FOR
  echo '<select name="promocion">';
  for ($anio = 2020; $anio <= 2025; $anio++) {
    echo '<option value="', $anio, '">', $anio, '</option>';
  }
  echo '</select>';
?>

<?php
//Bucle WHILE
  $horasCiclo    = 2000;
  $horasPorAnio  = 700;
  $horasCursadas = 0;
  $anios         = 0;

  while ($horasCursadas < $horasCiclo) {
    $horasCursadas += $horasPorAnio;
    $anios++;
  }

  echo '<p>Años necesarios: ', $anios, '</p>';   // deben salir 3 años -> 700 + 700 + 700 = 2100 > 2000
?>

<?php
// Bucle FOREACH -> recorrer array haciendo un <li> por elemento del array
  $curriculos = [
    ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
  ];

  echo '<ul>';
  foreach ($curriculos as $curriculo) {
    echo '<li class="curriculo">', $curriculo['alumno'], ' — ', $curriculo['ciclo'], '</li>';
  }
  echo '</ul>';
?>

<?php
// Bucle FOREACH -> recorrer array con una clave
  $curriculo = ['alumno' => 'Ana López', 'ciclo' => 'DAW', 'video' => 'https://youtu.be/curriculo1'];

  echo '<dl>';
  foreach ($curriculo as $campo => $valor) {
    echo '<dt>', $campo, '</dt><dd>', $valor, '</dd>';
  }
  echo '</dl>';
?>

 <?php
 // CONTINUE y SINTAXIS ALTERNATIVA
   $curriculosPublicados = [
     ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
     ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
     ['alumno' => 'Pablo Ruiz',   'ciclo' => 'DAW',  'video' => ''],
     ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
   ];
 ?>
 <table>
   <tr><th>Alumno</th><th>Vídeo</th></tr>
   <?php foreach ($curriculosPublicados as $curriculo): ?>
     <?php if ($curriculo['video'] === '') { continue; } ?> <!-- Por ende solo muestra 3 líneas, ya que el campo video de Pablo Ruiz  está vacío -->
     <tr class="con-video">
       <td><?= $curriculo['alumno'] ?></td>
       <td><a href="<?= $curriculo['video'] ?>">vídeo</a></td>
     </tr>
   <?php endforeach; ?>
 </table>