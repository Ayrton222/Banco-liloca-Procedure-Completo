<?php
    include_once('config.php');

    if(!empty($_GET['idCliente']))
    {
        $id = $_GET['idCliente'];
        $sqlSelect = "SELECT * FROM festa WHERE Cliente_idCliente=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id = $user_data['Cliente_idCliente'];
                $nome = $user_data['nome'];
                $idade = $user_data['idade'];
                $endereco = $user_data['endereco'];
                $tema = $user_data['tema'];
                $cores = $user_data['cores'];
            }
        }
        else
        {
            header('Location: Festa.php');
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
    <link rel="stylesheet" href="css/festa.css">

</head>
<body>
<div class="titulo">
        Cadastro de Festa
    </div>

    <div class="conteudo">
        <form action="saveEditFesta.php" method="post">
    
        <input type="hidden" name="Cliente_idCliente" id="aniversariante" value=<?php echo $id;?>>

            <label class="aniversariante">Aniversariante:</label>
            <input type="text" name="aniversariante" id="aniversariante" value=<?php echo $nome;?>>

          
            <label class="idade">Idade:</label>
            <input type="text" name="idade" id="idade" value=<?php echo $idade;?>>

            <label class="endereco">Endereço da festa:</label>
            <input type="text" name="endereco" id="end" value=<?php echo $endereco;?>>

            <label class="tema">Tema:</label>
            <input type="text" name="tema" id="tema" value=<?php echo $tema;?>>

            <label class="cor">Cores:</label>
            <input type="text" name="cores" id="cor" value=<?php echo $cores;?>>
            
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="submit" name="update" id="update" class="button"></input>
 
        </form>
    </div>
</body>
</html>
