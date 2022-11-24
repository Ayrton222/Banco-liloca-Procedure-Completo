
<?php
include_once('a.php');
$a = $_GET['idCliente'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pedido.css">
</head>
<body>
    <div class="titulo">
        Cadastro de Pedido
    </div>

    <div class="conteudo">
        <form action="gerenciar.php" method="post">
            
            <label class="data_pedido">Data do pedido:</label>
            <input type="date" name="data_pedido" id="data-pedido">

            <label class="data_festa">Data da festa:</label>
            <input type="date" name="data_festa" id="data-festa">

            <label class="prazo">Prazo de entrega:</label>
            <input type="date" name="prazo" id="prazo">

            <label class="data_entrega">Data da entrega:</label>
            <input type="date" name="data_entrega" id="data-entrega">

            <label class="tipo_entrega">Tipo da entrega:</label>
            <input type="text" name="tipo_entrega" id="tipo-entrega">
          
            <label class="frete">Frete:</label>
            <input type="text" name="frete" id="frete">
 
            <label class="sinal">Sinal:</label>
            <input type="text" name="sinal" id="sinal">

            <label class="restante">Restante:</label>
            <input type="text" name="restante" id="restante">

            <input type="hidden" name="Cliente_idCliente" id="aniversariante" value =<?php echo $a ?>>
            <input type="submit" name="submitPe" id="submit" class="button"></input>

        </form>
    </div>
</body>
</html>