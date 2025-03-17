<?php
$aluno = [
"nome" => "Zani",
"idade" => 17,

"estudar" => function() use (&$aluno){
    echo "{$aluno['nome']} está estudando.";
}
];

$aluno['estudar']();
?>