<?php

$nota = 7;

if ($nota >= 7) {
    echo "Aluno (a) Aprovado!";
} else if (($nota < 7) && ($nota >= 4)) {
    echo "Aluno (a) está em recuperação";
} else {
    echo 'Aluno (a) Reprovado!';
}
