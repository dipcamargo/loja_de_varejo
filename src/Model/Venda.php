<?php

namespace APP\Model;

class Venda{
    private  int $register;
    private Cliente $cliente;
    private Funcionario $funcionario;
    private array $produto;
    private float $total;

public function calculateSubtotal(){
     $subtotal = 0;

    foreach($this -> produto as $produto){
       
        $subtotal += self::calcularTotal($produto);

    }
    return $subtotal;

}
private function calcularTotal(Product $produto):float{
    return $produto->preco * $produto->quantidade;
}


}

