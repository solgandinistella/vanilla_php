<?php
  function mostrarCiclo() {
    $nombreCiclo = "Desarrollo de Aplicaciones Web";
    echo '<p>', $nombreCiclo, '</p>';
  }

  mostrarCiclo();

  // echo $nombreCiclo;   // ERROR Porque esta variable existe únicamente dentro de la función
?>

<?php
  $totalCiclosMostrados = 0;

  function registrarVisita() {
    global $totalCiclosMostrados; // NO RECOMENDABLE USAR GLOBAL
    $totalCiclosMostrados++;
  }

  registrarVisita();
  registrarVisita();
  registrarVisita();

  echo '<p>Ciclos mostrados: ', $totalCiclosMostrados, '</p>';   // 3 pq se usa 3 veces
?>

<?php
  define('NOMBRE_CENTRO', 'CIFP Carlos III');

  function pie() {
    // Sin "global": las constantes son accesibles en cualquier ámbito
    echo '<footer>', NOMBRE_CENTRO, '</footer>';
  }

  pie();
?>

<?php
  function contadorVisitas() {
    static $visitas = 0;
    $visitas++;
    echo '<p>Visita número ', $visitas, '</p>';
  }

  contadorVisitas();   // Visita número 1
  contadorVisitas();   // Visita número 2
  contadorVisitas();   // Visita número 3

  /*
  Cuando recargo la página no empieza desde 4 pq se hace una nueva peticion http,
  y los resultados anteriores de las variables
  no quedan almacenados en memoria.
  */
?>