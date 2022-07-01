<?php
namespace APP\Model;

class Fornecedor{
    private int $cnpj;
    private string $nome;
    private Endereco $endereco;

    public function __construct(
        String $cnpj,
        String $name,
        ?String $telefone = null,
        ?Endereco $endereco = null
    )
    {
        $this->cnpj = $cnpj;
        $this->name = $name;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }   
}
