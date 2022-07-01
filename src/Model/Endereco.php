<?php

namespace APP\Model;

class Endereco{
    private string $logradouro;
    private int $numero;
    private  string $bairro;
    private string $cidade;
    private string $cep;
    private string $complemento;
    private string $telefone;
    
    public function __construct(
        string $logradouro,
        string $numero,
        string $complemento,
        string $bairro,
        string $cidade,
        string $cep
    )
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->cep = $cep;
    }
}