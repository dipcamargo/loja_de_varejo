<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name):bool
    {
        return mb_strlen($name) > 4; 
    }

    public static function validateComplemento(string $complemento):bool
    {
        return mb_strlen($complemento) > 2; 
    }
    
    public static function validateNumber(int|float $value)
    {
        return $value > 0;
    }

    public static function validateBarCode(string $barCode) :bool
    {
        return mb_strlen($barCode) == 13 && mb_substr($barCode,0,3) == '789';
    }

    public static function validateCnpj(int $cnpj):bool
    {
        return mb_strlen($cnpj) == 14;
    }
    
    public static function validateTelefone(int|float $telefone)
    {
        return $telefone > 0;
    }

    public static function validateEndereco(string $endereco) :bool
    {
        return mb_strlen($endereco) == 13 && mb_substr($endereco,0,3);
    }
    public static function validarCep(string $cep) :bool
    {
        return mb_strlen($cep) == 9;
    }
    
}