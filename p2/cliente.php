
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comida</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="titulo">
        Cadastro de Cliente
    </div>

    <div class="conteudo">
        <div class="form">
            <form action="gerenciar.php" method="post">
            
            <label class="nome">Nome:</label>
            <input type="text" name="nome" id="name">

            <label class="telefone">Telefone:</label>
            <input type="text" name="telefone" id="tel">
            
            <label class="endereco">Endereço:</label>
            <input type="text" name="endereco" id="end">

            <label class="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf">

            <input type="submit" name="submit" id="submit" class="button"></input>
 
            </form>
        </div>
    </div>
</body>
</html>