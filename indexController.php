<?php
//$nome = $_POST['nome'];
//$idade = $_POST['idade'];

//echo $nome; 
//echo "<br>";

//if($idade > 18){
//    echo " {$idade} Velho";
//}else{
    // echo " {$idade} Novo";
//}


// $frutas = array('maca','banana','melancia','melao','abacaxi','laranja');
// for($posicao = 0; $posicao < count($frutas); $posicao++)
// {
//     echo "A fruta na posição:" . $posicao . " é " . $frutas[$posicao] . " ";
//     "<br>";
// }


$numeros = array('0','1','6','3','4','5');
$verificador = $numeros[0];
for($posicao = 0; $posicao < count($numeros); $posicao++){

    if($verificador < $numeros[$posicao]){
        $verificador = $numeros[$posicao];
  }

}

echo "O maior número é: "  . $verificador. " ";
?>