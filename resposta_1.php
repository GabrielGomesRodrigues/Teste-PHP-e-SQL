//Utilizando código PHP, escreva um algoritmo que calcule a média de notas de uma turma e no final apresente o resultado. (< 5 - Reprovado, < 7 - Exame, >= 7 - Aprovado)


<?php

// Array com as notas da turma
$notas = [7, 5.5, 8, 6.5, 4, 9, 7.5];

// Calcula a média das notas
$media = array_sum($notas) / count($notas);

// Exibe o resultado da média
echo "A média da turma é: " . $media . "<br>";

// Verifica a situação de cada aluno e apresenta o resultado
foreach ($notas as $nota) {
    if ($nota < 5) {
        echo "Reprovado" . "<br>";
    } elseif ($nota < 7) {
        echo "Exame" . "<br>";
    } else {
        echo "Aprovado" . "<br>";
    }
}
