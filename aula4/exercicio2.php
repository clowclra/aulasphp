<?php
//condiconais encadeadas
$idade=60;

if(($idade >=16 && $idade <18) || $idade>=70){
    echo "Voto facultativo";

}else if($idade >=18 && $idade <70){
  echo "Voto obrigatório";
}else{
    echo "Não vota";
}

?>