<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      $nome = "Toniazzo";
      $ano = date('Y');
      $anonasc = 2006;
      $num = 0;
      echo "Olá mundo ". $nome ."<br>". " Idade: ". $ano - $anonasc. "<br>";

      if($ano - $anonasc >=18){
        echo $nome. " é maior de idade"."<br>";
      }else{
        echo $nome. " é menor de idade"."<br>";
      }

      echo "<br>";
      for($num=0; $num<=10; $num++){
        echo "Número: ". $num . "<br>";
      }

      echo "<br>";
      $num = 0;
      while ($num <= 10){
        echo  " ". $num. "<br>";
        $num++;
      }

      echo "<br>";
      for($num=10; $num>=0; $num--){
        echo "Número: ". $num . "<br>";
      }

      echo "<br>";
      $hoje = date('d/m/Y');
      echo "Data: ". $hoje . "<br>";
      echo date("d F Y". "<br>");
    ?> 
  </body>
</html>