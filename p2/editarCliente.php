<?php
    include_once('config.php');

    if(!empty($_GET['idCliente']))
    {
        $id = $_GET['idCliente'];
        $sqlSelect = "SELECT * FROM cliente WHERE idCliente=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id = $user_data['idCliente'];
                $nome = $user_data['nome'];
                $telefone = $user_data['telefone'];
                $endereco = $user_data['endereco'];
                $cpf = $user_data['cpf'];
            }
        }
        else
        {
            header('Location: cliente.php');
        }

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comida</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cliente.css">

</head>
<body>
    <div class="titulo">
        Cadastro de Cliente
    </div>

    <div class="conteudo">
        <form action="saveEditCliente.php" method="post">
            
        <input type="hidden" name="idCliente" id="medida" value=<?php echo $id;?> required>
            
        <label class="nome">Nome:</label>
            <input type="text" name="nome" id="name" value=<?php echo $nome;?>>

            <label class="telefone">Telefone:</label>
            <input type="text" name="telefone" id="tel" value=<?php echo $telefone;?>>
            
            <label class="endereco">Endereço:</label>
            <input type="text" name="endereco" id="end" value=<?php echo $endereco;?>>

            <label class="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" value=<?php echo $cpf;?>>
            
            
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="submit" name="update" id="update" class="button"></input>
 
        </form>
    </div>
</body>
</html>
