<h2>Vetor indexado por texto</h2>
<p>
    osvalores podem usar textos para 
    indexar (identificar) osvalores armazenados.
    exemplo
<pre>
        +-----------+
nome    | Anna      |
        +-----------+
notal   |9          |
        +-----------+
nota2   |7          |
        +-----------+
</pre>
</p>
<?php

$alunos = [
"nome" => "Anna",
"nota1" => 9,
"nota2" => 7
];

$alunos["notatotal"] = $alunos["nota1"] + $alunos["nota2"];
var_dump($alunos);

echo "<p>&nbsp;</p><pre>";
//imprimir todos os valores de um vetor
//utilizando o foreach

foreach($alunos as $key => $value){
  printf("%23s\n", "+-----------+");
  printf("%9s | %9s | \n", $key, $value);
  printf("%23s\n", "+-----------+");
}


?>
</pre>