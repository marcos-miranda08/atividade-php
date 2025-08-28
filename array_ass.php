<?php
$pessoa = ["nome" => "joão", "idade" => 30];
echo $pessoa["nome"];

?>
<p> Olá aqui  é um HTML:</p>
<?php
$aluno= ["nome" => "joão", "idade" => 18, "nota" => 100];
   echo "Olá $aluno[nome], você tem $aluno[idade] anos, sua nota foi $aluno[nota] <br>";
//Olá joão, você tem 16 anos e sua note é 100
  $num1 = 2010;
  $num2 = 3;
$resultado = $num1 - $num2;
echo " E o ano que vc nasceu é  $resultado <br>";
$data_atual = date("d-m-Y");
echo "Hoje é $data_atual, dia nacional da habilitação.";
$horario_atual = date("H:i:s");
echo " O horario exato de agora é $horario_atual";
?>