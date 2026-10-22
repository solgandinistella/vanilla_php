<?php
  $grado = 'Superior';

   if ($grado === 'Superior') {
    echo '<p>Ciclo de Grado Superior: da acceso a la universidad.</p>';
  } elseif ($grado === 'Medio') {
    echo '<p>Ciclo de Grado Medio: da acceso a un Grado Superior.</p>';
  } else {
    echo '<p>Grado desconocido.</p>';
  }
?>

<?php
  $videoCurriculum = 'https://youtu.be/curriculo1';
  $textoCurriculum = '';

  if ($videoCurriculum !== '' && $textoCurriculum !== '') {
    echo '<p>Currículo completo</p>';
  } elseif ($videoCurriculum !== '' || $textoCurriculum !== '') { // esta es la salida esperada
    echo '<p>Currículo incompleto</p>';
  } else {
    echo '<p>Currículo vacío</p>';
  }
?>

<?php
  $codFamilia = 'INF';

  $familia = match ($codFamilia) {
    'INF'   => 'Informática y Comunicaciones',
    'ADG'   => 'Administración y Gestión',
    'COM'   => 'Comercio y Marketing',
    default => 'Familia desconocida',
  };

  echo '<p>Familia profesional: ', $familia, '</p>';
?>

<?php
  $grado = 'Superior';
  $titulo = $grado === 'Superior' ? 'Técnico Superior' : 'Técnico'; // es como un if abreviado
  echo '<p>Titulación: ', $titulo, '</p>';  // va a salir Técnico Superior
?>

<?php
  $curriculo = ['alumno' => 'Ana López', 'ciclo' => 'DAW'];

  echo '<p>Vídeo: ', $curriculo['video'] ?? 'Sin vídeo de presentación', '</p>';
?>