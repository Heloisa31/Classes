<?php

class Vendedor
{
    public $nome;
    public $matricula;
    public $cpf;
    public $telefone;

    public function vender()
    {
        echo "O vendedor vendeu um produto";
    }

    public function entrega()
    {
        echo "O vendedor aceitou uma venda";
    }


}
