<?php
namespace APP\Controller;

use APP\Model\Endereco;
use APP\Model\Validation;
use APP\Utils\Redirect;
use APP\Model\Fornecedor;

require '../../vendor/autoload.php';

if(empty($_POST)){
    session_start();
    Redirect::redirect(
        tipo:'error',
        mensagem:"Requisição Inválida!"
    );
}
$cnpj = $_POST['cnpj'];
$name = $_POST['name'];
$telefone = $_POST['telefone'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade =  $_POST['cidade'];
$cep = $_POST['cep'];

$error = array();

if(!Validation::validateName($name)){
    array_push($error,"Inválido, o nome devera ter mais de 2 aracteres!!");
}
if(!Validation::validateNumber($cnpj)){
    array_push($error,"Inválido, o CNPJ não deverá ser somente zero!!");
}
if(!empty($telefone)){
    if(!Validation::validateNumber($telefone)){
        array_push($error,"Inválido, o telefone e não deverá ser somente zero!!");
    }
}

$endereco = new Endereco(
    logradouro: $logradouro,
    numero: $numero,
    complemento: $complemento,
    bairro: $bairro,
    cidade: $cidade,
    cep: $cep
);
if(!empty($endereco)){
    if(!Validation::validateName($logradouro)){
        array_push($error,"Inválido, a rua devera ter mais de 2 caracteres!!");
    }
    if(!Validation::validateNumber($numero)){
        array_push($error,"Inválido, o numero da casa nao deverá somente zero!!");
    }
    if(!Validation::validateComplemento($complemento)){
        array_push($error,"Inválido, o complemento devera ter mais de 2 caracteres!!");
    }
    if(!Validation::validateName($bairro)){
        array_push($error,"Inválido, o bairro devera ter mais de 2 caracteres!!");
    }
    if(!Validation::validateName($cidade)){
        array_push($error,"Inválido, a cidade devera ter mais de 2 caracteres!!");
    }
    if(!Validation::validarCep($cep)){
        array_push($error,"Inválido, o CEP nao deverá somente zero!!");
    }
    if(!Validation::validateCnpj($cnpj)){
        array_push($error,"CNPJ inválido!!!");
    }
}
$fornecedor = new Fornecedor(
    name: $name,
    cnpj: $cnpj,
    telefone: $telefone,
    endereco: $endereco
);
if($error){
    Redirect::redirect(
    mensagem: $error, tipo:'warning');
    }else{

        $fornecedor = new Fornecedor(
            name: $name,
            cnpj: $cnpj,
            telefone: $telefone,
            endereco: $endereco
            );
        
    Redirect::redirect(
        mensagem:'Fornecedor cadastrado com sucesso!!!'
    );
}