<?php 

  $notas = [5,7,8,4,10];

  for($i = 0; $i<=count($notas); $i++){
      echo $notas[$i]."<br>";
  }

  $nomes = ["Toniazzo" => 18, "Chaves" =>16, "Chiquinha"=>17];

  foreach($nomes as $key => $value){
    echo "Nome: ". $key. " Idade: ". $value. "<br>";
  }

?>