<?php
// Pidiendo datos al usuario
  $apellido = fgets(STDIN); // usar trim

  $estudiantes = ['Lopez', 'Lamine', 'Martinez', 'Sánchez', 'Alfonso', 'Garcia', 'Gandini', 'Gonzalez'];;

  for ($buscado = 0; $buscado < count($estudiantes); $buscado++) {
    if ($estudiantes[$buscado] === $apellido) {
    echo '<p>El apellido ',$apellido,' se encuentra en este array.</p>';
    break;
  } 
  }
?>

<?php
// Sin pedir datos al usuario
  $estudiantes = ['Lopez', 'Lamine', 'Martinez', 'Sánchez', 'Alfonso', 'Garcia', 'Gandini', 'Gonzalez'];;

  for ($buscado = 0; $buscado <= count($estudiantes); $buscado++) {
    if ($estudiantes[$buscado] === 'Gandini') {
    echo '<p>El apellido Gandini se encuentra en este array.</p>';
    break;
  } 
  }
?>