<?php
  define('NOMBRE_CENTRO', 'CIFP Carlos III');
?>

<?php
  $curriculos = [
    ['img' => 'https://images.unsplash.com/photo-1536331307320-5316320e97cc?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMjJ8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxMzN8MA&ixlib=rb-4.1.0&fit=max&q=80', 'alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
    ['img' => 'https://images.unsplash.com/photo-1599566147214-ce487862ea4f?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxNDB8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxMzN8MA&ixlib=rb-4.1.0&fit=max&q=80', 'alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
    ['img' => 'https://images.unsplash.com/photo-1496203695688-3b8985780d6a?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMzh8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxMzN8MA&ixlib=rb-4.1.0&fit=max&q=80', 'alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
    ['img' => 'https://images.unsplash.com/photo-1512646605205-78422b7c7896?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMjZ8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxMzN8MA&ixlib=rb-4.1.0&fit=max&q=80', 'alumno' => 'María Sol Gandini Stella', 'ciclo' => 'DAW', 'video' => 'https://youtu.be/OqSQo2aifAA?si=d3-Ex9kodKjQpLG8'],

  ];

?>

<?php
  function mostrarCurriculo(array $curriculo) {
    echo '<li> <img src="', $curriculo['img'], '" alt="Girl in a jacket" width="200" height="200">', $curriculo['alumno'], ' — ', $curriculo['ciclo'],
         ' — <a href="', $curriculo['video'], '">vídeo</a></li>';
  }
?>

<?php
  echo '<h1>', NOMBRE_CENTRO, ' — Currículos</h1>'; //Título de la pág., muestra nombre centro

  echo '<ul>'; // Empieza un listado
  mostrarCurriculo($curriculos[0]); // La función añade un nuevo elemento a la lista (li) por cada llamada
  mostrarCurriculo($curriculos[1]);
  mostrarCurriculo($curriculos[2]);
  mostrarCurriculo($curriculos[3]);
  echo '</ul>';
?>