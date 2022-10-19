<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

echo $nome; 
echo "<br>";

if($idade > 18){
    echo " {$idade} Velho";
}else{
    echo " {$idade} Novo";
}
?>