<?php
 declare(strict_types=1);

 require_once __DIR__ . '/../src/Curriculo.php';

 $daw = new Ciclo(1, 'DAW', 'Desarrollo de Aplicaciones Web', Ciclo::GRADO_SUPERIOR);
 $curriculo = new Curriculo(1, 'Ana López', $daw, 'https://youtu.be/curriculo1');

 $mismoCurriculo = $curriculo;   // no es una copia: es el MISMO objeto (para copias --> clone)
 $mismoCurriculo->publicar(); // Va a salir publicado, pq aunque no se esté llamando al método desde
 //                              $curriculo, $mismoCurriculo también apunta ahí (a ese espacio en memoria)

 // $daw->codCiclo = 'DAM'; // ERROR: pq no se puede modificar propiedad readonly
 // new Modelo(2); // ERROR: pq no se pueden instanciar clases abstractas
 // echo Ciclo::GRADO_SUPERIRO; // ERROR: constante no definida, superiRO????
 ?>
 <h1><?= $daw->descripcion() ?></h1>
 <p>Titulación: <?= $daw->titulacion() ?></p>
 <p><?= $curriculo->descripcion() ?>: <?= $curriculo->estaPublicado() ? 'publicado' : 'en borrador' ?></p>