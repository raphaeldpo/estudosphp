<?php

$carro = ['ferrari','bmw','mercedes'];
//            0       1        2 
print_r($carro);
// ou print_r ($carro[1]) lembrando que começa do 0
// podemos usar array () ou [] > para chamar um array
$endereço = [ 
    'cep' => '1231354',
    'numero' => '1234',
    'cidade' => 'Guarapuava',
    'estado' => 'Parana'
];
    print_r($endereço['cep']
);

$Enderecopessoas = [

    'pessoa1' => array (
        'cep' => '123131331',
        'cidade' => 'Guarapuava'
    ),

    'pessoa2' => [
        'cep' => '45454545',
        'cidade' => 'Irati'

    ],
];
if(isset($Enderecopessoas['pessoa1']['cidade1'])){
print_r($Enderecopessoas['pessoa1']['cidade1']);
}