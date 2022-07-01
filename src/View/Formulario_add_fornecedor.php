<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Varejo - Cadastro de Fornecedores</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="../controller/Fornecedor.php" method="POST">
        <fieldset class="flex flex-col justify-center p-4 m-5 border border-blue-400">
            <legend>Dados do fornecedor</legend>
            <section style="margin: 10px 0">
                <article>
                    <label for="name">Nome: </label>
                    <input type="text" id="name" name="name" class="border border-blue-400" required minlength="2">
                </article>
            </section>
            <section class="columns-2">
                <article>
                    <label for="cnpj">CNPJ: </label>
                    <input type="number" id="cnpj" name="cnpj" class="border border-blue-400" style="width: 14vw;" required min="1">
                </article>
                <article>
                    <label for="telefone">Telefone: </label>
                    <input type="number" id="telefone" name="telefone" class="border border-blue-400" style="width: 12vw;">
                </article>
            </section>
            <fieldset class="p-4 m-5 border border-blue-400">
                <legend>Endereço</legend>
                <section class="columns-2">
                    <article>
                        <label for="logradouro">Rua: </label>
                        <input type="text" id="logradouro" name="logradouro" style="width: 18.8vw;" class="border border-blue-400">
                    </article>
                    <article>
                        <label for="numero">N°: </label>
                        <input type="number" id="numero" name="numero" class="border border-blue-400" style="width: 7.6vw;">                    </article>
                </section>
                <section class="columns-2" style="margin: 10px 0">
                    <article>
                        <label for="complemento">Complemento: </label>
                        <input type="text" id="complemento" name="complemento" class="border border-blue-400">
                    </article>
                    <article>
                        <label for="cep">CEP: </label>
                        <input type="text" id="cep" name="cep" class="border border-blue-400" style="width: 7vw;">
                    </article>
                </section>
                <section class="columns-2">    
                    <article>
                        <label for="bairro">Bairro: </label>
                        <input type="text" id="bairro" name="bairro" style="width: 17.8vw;" class="border border-blue-400">
                    </article>
                    <article>
                        <label for="cidade">Cidade: </label>
                        <input type="text" id="cidade" name="cidade" class="border border-blue-400">
                    </article>

                </section>
            </fieldset>
            <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-blue-700 rounded">Cadastrar</button>
            </article>
        </fieldset>
    </form>
</body>
</html>