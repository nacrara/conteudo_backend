<h2>Operadores Logicos</h2>

<ol>
    <li>and - E</li>
    <li>or - OU</li>
    <li>xor - ou</li>
    <li>! - não</li>
    <li>&& - E</li>
    <li>|| - ou</li>
</ol>
<?php
   $media = 6;
   $faltas = 20;
   $criterio1 = $media > 6;// false
   $creterio2 = $faltas < 25;// true
   $resultado = $criterio1 && $creterio2;//false
   var_dump($resultado);