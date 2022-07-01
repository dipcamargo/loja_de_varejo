<?php
namespace APP\Model;
class Product{
    private int $codigoDeBarra;
    private string $name;
    private float $preco;
    private int $quantidade;
    private Fornecedor $fornecedor;
    private bool $isActive;

    public function __construct(
        float $cost,
        float $tributes,
        float $fixedCost,
        int $codBar,
        string $name,
        int $quantity,
        Fornecedor $fornecedor,
        float $lucre =0.2,
        bool $isActive = true
    )
    {
        $this->codBar = $codBar;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->fornecedor = $fornecedor;
        $this->isActive = $isActive; 
        
        self::calcularPrecoVenda(
            tributos: $tributes,
            custo: $cost,
            lucro: $lucre,
            custoFixo: $fixedCost
        );
    }

    /**
     * Essa funcao vai calcular o preço do produto com base nos custos fixos, tributos e custos
     *  de aquisição
     *
     * @param float $custo
     * @param float $tributos
     * @param float $custoFixo
     * @param float $lucro
     * @return void
     * 
     */


    private function calcularPrecoVenda(float $custo, float $tributos, float $custoFixo, float $lucro=0.4)
    {
        $this->preco = ($custo + $tributos + $custo) / (1 - $lucro);

    }

       /**
        * Essa função vai calcular a diferença entre o preço de venda  e o custo de aquisição
        */

    public function calcularMarkup (float $custo):float{
        return $this-> preco / $custo;
    }





}
