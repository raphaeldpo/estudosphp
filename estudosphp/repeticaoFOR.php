<?php

//$arrayNumeros = [3,5,6,1,2];
//$qtd_elementos_array = count($arrayNumeros); //contador sendo eles 5 números 
//var_dump($qtd_elementos_array);
//for ($i=0; $i < $qtd_elementos_array; $i++) {
//   print_r ($arrayNumeros[$i]);
//}
// $i = 0 
// $posicaoAtual = 0


// ----------------------------------------------- DESAFIO COM FOR  ----------------------------------------------//


//$arr = [54, 23, 93, 17, 77, 31, 44, 55, 20];

//$qtd_elementos_array = count($arr);

//for ($i = 0; $i < $qtd_elementos_array - 1; $i++) {
//    for ($posicaoAtual = 0; $posicaoAtual < $qtd_elementos_array - $i - 1; $posicaoAtual++) {
//        $proximaPosicao = $posicaoAtual+1;
//
//       if ($arr [$proximaPosicao] < $arr[$posicaoAtual]) {
//            $auxiliar = $arr [$posicaoAtual];
//            $arr [$posicaoAtual] = $arr [$proximaPosicao];
//            $arr [$proximaPosicao] = $auxiliar;
//        }
//    }
//}


// ----------------------------------------------- DESAFIO COM FOREACH  ------------------------------------------//

$arr = [54, 23, 93, 17, 77, 31, 44, 55, 20];

$qtd_elementos_array = count($arr);

foreach ($arr as $key => $value) {
    for ($posicaoAtual = 0; $posicaoAtual < $qtd_elementos_array - $key - 1; $posicaoAtual++) {
        $proximaPosicao = $posicaoAtual + 1;

        if ($arr[$proximaPosicao] < $arr[$posicaoAtual]) {
            $auxiliar = $arr[$posicaoAtual];
            $arr[$posicaoAtual] = $arr[$proximaPosicao];
            $arr[$proximaPosicao] = $auxiliar;
        }
    }
}

print_r($arr) . "\n"; 

