<?php
    include_once('config.php');

    if(!empty($_GET['idCliente']))
    {
        $id = $_GET['idCliente'];
        $sqlSelect = "SELECT * FROM pedido WHERE Cliente_idCliente=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id = $user_data['Cliente_idCliente'];
                $dataPedido = $user_data['data_pedido'];
                $dataFesta = $user_data['data_festa'];
                $prazo = $user_data['prazo'];
                $dataEntrega = $user_data['data_entrega'];
                $tipoEntrega = $user_data['tipo_entrega'];
                $frete = $user_data['frete'];
                $sinal = $user_data['sinal'];
                $restante = $user_data['restante'];
            }
        }
        else
        {
            header('Location: pedido.php');
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
    <link rel="stylesheet" href="css/pedido.css">

</head>
<body>
<div class="titulo">
        Cadastro de Pedido
    </div>

    <div class="conteudo">
        <form action="saveEditPedido.php" method="post">
    
        <input type="hidden" name="Cliente_idCliente" id="aniversariante" value=<?php echo $id;?>>

            <label label class="data_pedido">Data do pedido:</label>
            <input type="date" name="data_pedido" id="data-pedido" value=<?php echo $dataPedido;?>>

            <label class="data_festa">Data da festa:</label>
            <input type="date" name="data_festa" id="data-festa" value=<?php echo $dataFesta;?>>

            <label class="prazo">Prazo de entrega:</label>
            <input type="date" name="prazo" id="prazo" value=<?php echo $prazo;?>>

            <label class="data_entrega">Data da entrega:</label>
            <input type="date" name="data_entrega" id="data-entrega" value=<?php echo $dataEntrega;?>>

            <label class="tipo_entrega">Tipo da entrega:</label>
            <input type="text" name="tipo_entrega" id="tipo-entrega" value=<?php echo $tipoEntrega;?>>
          
            <label class="frete">Frete:</label>
            <input type="text" name="frete" id="frete" value=<?php echo $frete;?>>
 
            <label class="sinal">Sinal:</label>
            <input type="text" name="sinal" id="sinal" value=<?php echo $sinal;?>>

            <label class="restante">Restante:</label>
            <input type="text" name="restante" id="restante" value=<?php echo $restante;?>>

            
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="submit" name="update" id="update" class="button"></input>
 
        </form>
    </div>
</body>
</html>
