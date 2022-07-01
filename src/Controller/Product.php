<?php
namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Utils\Redirect;
use APP\Model\Validation;
use APP\Model\Product;
use APP\Model\Fornecedor;

use function PHPSTORM_META\type;

if(empty($_POST)){
    Redirect::redirect(
        tipo:'error',
        mensagem:'Requisição inválida!!!!'
    );
    
}
//para conectar o arquivo product com o form é como se fosse o get, porem via array
$productName = $_POST["name"];
$productStorage = $_POST["storage"];
$productCost = $_POST["cost"];
$productProvider = $_POST["provider"];
$codBar = $_POST["codBar"];
$error = array();

if(!Validation::validateName($productName))
{
    array_push($error, 'O nome do produto deve conter pelo manos 5 caracteres entre letras e números!!!');
}

if(!Validation::validateNumber($productStorage))
{
    array_push($error, 'A quantidade em estoque deve ser superior à 1 unidade!!!');
}
if(!Validation::validateNumber($productCost))
{
    array_push($error, 'O custo de aquisição deve ser superior ou igual à R$ 1');
}
if(!Validation::validateBarCode($codBar))
{
    array_push($error, 'O código de barra não é válido segundo nossos parâmetros!!!');
}
if($error){
Redirect::redirect(
mensagem: $error, tipo:'warning');
}else{
    $product = new Product(
        name: $productName,
        codBar: $codBar,
        fixedCost: 0.5,
        cost: $productCost,
        tributes: 0.75,
        quantity: $productQuantity,
        fornecedor: new Fornecedor(
        cnpj: '00000/0001',
        name: "Fornecedor Padrão"
        )
    );
    
Redirect::redirect(
    mensagem:'Produto cadastrado com sucesso!!!'
);
    }