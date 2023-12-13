<?php

function f1()
{
    echo ">f1 está antes da exceção" . "\n";
}

function f2($int)
{
    if (!is_int($int)) {
        throw new Exception("o argumento não é do tipo esperado");
    } else {
        echo ">f2 está na exceção" . "\n";
    }
    f3();
}

function f3()
{
    echo ">f3 está depois da exceção";
}

f1();
f2(
    int: 5.5 
    // logo se for um número inteiro, ele proceguirá corretamente
);
