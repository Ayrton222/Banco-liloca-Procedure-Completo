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
    <title>Document</title>

</head>
<body>
    
    <?php
    include_once('config.php');
 $sql = "select cliente.idCliente, cliente.nome, cliente.telefone, cliente.endereco,cliente.cpf, pedido.idPedido,pedido.data_pedido, pedido.data_festa, pedido.prazo, pedido.data_entrega, pedido.tipo_entrega, pedido.frete, pedido.sinal, pedido.restante, festa.idFesta, festa.aniversariante, festa.idade, festa.endereco, festa.tema, festa.cores from cliente inner join pedido ON cliente.idCliente = pedido.Cliente_idCliente inner join festa on festa.Cliente_idCliente = cliente.idCliente where cliente.idCliente = $a";
 $result = $conexao->query($sql);
    ?>

<table border="1">

     <tr>
         <td>Código</td>
         <td>Nome</td>
         <td>telefone</td>
         <td>Endereço</td>
         <td>CPF</td>
         <td>Codigo Festa</td>
         <td>Aniversariante</td>
         <td>Idade</td>
         <td>Endereço da festa</td>
         <td>tema</td>
         <td>Cores</td>
         <td>Código pedido</td>
         <td>data pedido</td>
         <td>data festa</td>
         <td>prazo</td>
         <td>data_entrega</td>
         <td>tipo_entrega</td>
         <td>frete</td>
         <td>sinal</td>
     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idCliente']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['cpf']."</td>";
                        echo "<td>".$user_data['idFesta']."</td>";
                        echo "<td>".$user_data['aniversariante']."</td>";
                        echo "<td>".$user_data['idade']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['tema']."</td>";
                        echo "<td>".$user_data['cores']."</td>";
                        echo "<td>".$user_data['idPedido']."</td>";
                        echo "<td>".$user_data['data_pedido']."</td>";
                        echo "<td>".$user_data['data_festa']."</td>";
                        echo "<td>".$user_data['prazo']."</td>";
                        echo "<td>".$user_data['data_entrega']."</td>";
                        echo "<td>".$user_data['tipo_entrega']."</td>";
                        echo "<td>".$user_data['frete']."</td>";
                        echo "<td>".$user_data['sinal']."</td>";
                        echo "</tr>";
                        
                    }
                    ?>


    </table>

    <?php
    include_once('config.php');
 $sqlA = "select produto.idProduto,produto.bolo_chocolate,produto.quantidade_boloC, produto.valor_unit, produto.valor_totalB from festa inner join produto ON festa.Cliente_idCliente = produto.Cliente_idCliente where festa.Cliente_idCliente = $a;";
 $resultA = $conexao->query($sqlA);
    ?>

    <table border="1">

     <tr> 
         <td>Código Produto</td>
         <td>Bolo</td>  
         <td>Quantidade Bolo</td>
         <td>Valor Unitario Bolo</td>
         <td>Valor Total Bolo</td>
     </tr>
     <br>
      <?php
                    while($user_dataa = mysqli_fetch_assoc($resultA)) {
                        echo "<tr>";   
                        echo "<td>".$user_dataa['idProduto']."</td>";
                        echo "<td>".$user_dataa['bolo_chocolate']."</td>";
                        echo "<td>".$user_dataa['quantidade_boloC']."</td>";
                        echo "<td>".$user_dataa['valor_unit']."</td>";
                        echo "<td>".$user_dataa['valor_totalB']."</td>";            
                    }
                    ?>
    </table>

    <?php
    include_once('config.php');
 $sqlA = "select  produto.idProduto,produto.salgado_coxinha,produto.quantidade_salgadoC,produto.valor_unitS,produto.valor_totalS from festa inner join produto ON festa.Cliente_idCliente = produto.Cliente_idCliente where festa.Cliente_idCliente = $a;";
 $resultA = $conexao->query($sqlA);
    ?>

    <table border="1">
<tr>
    <td>Código Produto</td>
    <td>Salgado</td>
    <td>Quantidade Salgado</td>
    <td>Valor Unitario Salgado</td>
    <td>Valor Total Salgado</td>

</tr>

<br>
 <?php
               while($user_dataa = mysqli_fetch_assoc($resultA)) {
                   echo "<tr>";
                   echo "<td>".$user_dataa['idProduto']."</td>";
                   echo "<td>".$user_dataa['salgado_coxinha']."</td>";
                   echo "<td>".$user_dataa['quantidade_salgadoC']."</td>";
                   echo "<td>".$user_dataa['valor_unitS']."</td>";
                   echo "<td>".$user_dataa['valor_totalS']."</td>";
                   echo "</tr>";     
               }
               ?>
</table>

<?php
    include_once('config.php');
 $sqlA = "select produto.idProduto,produto.refrigeranteC,produto.quantidade_refriC,produto.valor_unitR, produto.valor_totalR from festa inner join produto ON festa.Cliente_idCliente = produto.Cliente_idCliente where festa.Cliente_idCliente = $a;";
 $resultA = $conexao->query($sqlA);
    ?>

    <table border="1">
<tr>
    <td>Código Produto</td>
    <td>Refrigerante</td>
    <td>Quantidade Refrigerante</td>
    <td>Valor Unitario Refrigerante</td>
    <td>Valor Total Refrigerante</td>
</tr>

<br>
 <?php
               while($user_dataa = mysqli_fetch_assoc($resultA)) {
                   echo "<tr>";
                   echo "<td>".$user_dataa['idProduto']."</td>";
                   echo "<td>".$user_dataa['refrigeranteC']."</td>";
                   echo "<td>".$user_dataa['quantidade_refriC']."</td>";
                   echo "<td>".$user_dataa['valor_unitR']."</td>";
                   echo "<td>".$user_dataa['valor_totalR']."</td>";
                   echo "</tr>";
                   
               }
               ?>


</table>

<?php
    include_once('config.php');
 $sqlA = "select produto.valor_total, pedido.frete, (produto.valor_total + pedido.frete) as valor_totalFrete, pedido.sinal, pedido.restante, ((produto.valor_total + pedido.frete) - pedido.sinal ) as valor_restante 
 from produto inner join pedido ON produto.Cliente_idCliente = pedido.Cliente_idCliente where produto.Cliente_idCliente = $a;";
 $resultA = $conexao->query($sqlA);
    ?>

    <table border="1">
<tr>
    <td>Valor Total do Pedido</td>
    <td>Valor Total do Pedido com frete</td>
    <td>Valor Sinal</td>
    <td>Valor Restante</td>
</tr>
<br>
 <?php
               while($user_dataa = mysqli_fetch_assoc($resultA)) {
                   echo "<tr>";
                   echo "<td>".$user_dataa['valor_total']."</td>";
                   echo "<td>".$user_dataa['valor_totalFrete']."</td>";
                   echo "<td>".$user_dataa['sinal']."</td>";
                   echo "<td>".$user_dataa['valor_restante']."</td>";
                   echo "</tr>";   
               }
               ?>
</table>
</body>
</html>
