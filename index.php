<?php

//Importação do arquivos Produto.php e Cliente.php
require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";
require_once "src/Classes/Carro.php";
require_once "src/Classes/Vendedor.php";


//Instancia do Produto
$prod1 = new Produto;
$prod1 -> titulo = "Skol";
$prod1 -> descricao = "Cerveja alemão";
$prod1 -> preco = 2.50;

$prod2 = new Produto;
$prod2 -> titulo = "Itaipava";
// $prod2 -> descricao = "Cerveja brasileira";
$prod2 -> preco = 1.90;

var_dump($prod1);
echo "<br>";
var_dump($prod2);
echo "<br>";

$cli = new Cliente;
$cli -> nome = "João";
$cli -> idade = 40;
$cli -> endereco = "Rua A";
$cli -> telefone = "41-xxxx-xxxx";

$cli -> comprar();
echo "<br>";
$cli -> cancelar();
echo "<br>";
var_dump($cli);

$car = new Carro;
$car -> modelo = "Chevrolet Onix";
$car -> placa = "TM 202";
$car -> ano = "2012";

echo "<br>";
$car -> acelera();
echo "<br>";
$car -> montanha();
echo "<br>";
var_dump($car);
echo "<br>";

$vend = new Vendedor;
$vend -> nome = "Pedro";
$vend -> matricula = "20";
$vend -> cpf = "938.936.367-00";
$vend -> telefone = "41-xxxx-xxxx";

$vend -> entrega();
echo "<br>";
$vend -> vender();
echo "<br>";
var_dump($vend);



