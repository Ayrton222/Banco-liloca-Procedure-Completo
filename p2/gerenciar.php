
<?php
if(isset($_POST['submit']))
{
    include_once('config.php');
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    //print_r($_POST['nome']);
    $result = mysqli_query($conexao, "CALL inserir_cliente ('$nome', '$telefone', '$endereco', '$cpf')");
}
?>

<?php
if(isset($_POST['submitF']))
{
    include_once('config.php');
    $aniversariante = $_POST['aniversariante'];
    $idade = $_POST['idade'];
    $idcliente = $_POST['Cliente_idCliente'];
    $endereco = $_POST['endereco'];
    $tema = $_POST['endereco'];
    $cor = $_POST['cores'];
    //print_r($_POST['nome']);
    $result = mysqli_query($conexao, "CALL inserir_festa ('$idcliente','$aniversariante', '$idade', '$endereco', '$tema','$cor')");
}
?>

<?php
if(isset($_POST['submitP']))
{
    include_once('config.php');

    $boloC = $_POST['boloC']; 
    $quantC = $_POST['quant_chocolate'];
    $salgadoC = $_POST['coxinha'];
    $quantSalgC = $_POST['quant_coxinha'];
    $refriC = $_POST['coca'];
    $quantRefriC = $_POST['quant_coca'];
    $idcliente = $_POST['Cliente_idCliente'];
    $valor_unit = $_POST['valor_unit'];
    $valor_unitS = $_POST['valor_unitS'];
    $valor_unitR = $_POST['valor_unitR'];
    //print_r($_POST['valorC']);

    $result = mysqli_query($conexao, "CALL inserir_produto  ('$idcliente','$boloC','$salgadoC','$refriC','$quantC','$quantSalgC','$quantRefriC','$valor_unit','$valor_unitS','$valor_unitR')");
}
?>

<?php
if(isset($_POST['submitPe']))
{
    include_once('config.php');
    $data_pedido = $_POST['data_pedido'];
    $data_festa = $_POST['data_festa'];
    $prazo = $_POST['prazo'];
    $data_entrega = $_POST['data_entrega'];
    $tipo_entrega = $_POST['tipo_entrega'];
    $festa = $_POST['frete'];
    $sinal = $_POST['sinal'];
    $restante = $_POST['restante'];
    $idcliente = $_POST['Cliente_idCliente'];

    //print_r($_POST['nome']);

    $result = mysqli_query($conexao, "CALL inserir_pedido ('$idcliente','$data_pedido', '$data_festa', '$prazo', '$data_entrega', '$tipo_entrega', '$festa', '$sinal','$restante')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/gerenciar.css">
</head>
<body>
    
    <?php
    include_once('config.php');
 $sql = "CALL consulta_cliente(@p0)";
 $result = $conexao->query($sql);
    ?>

<table border="1">

     <tr>
         <td>Código</td>
         <td>Nome</td>
         <td>Endereço</td>
         <td>CPF</td>
     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idCliente']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['cpf']."</td>";
                        echo "<td>
                        <a href='editarCliente.php?idCliente=$user_data[idCliente]' title='Editar'>Editar</a> |
                        <a href='deleteCliente.php?idCliente=$user_data[idCliente]' title='Deletar'>Deletar </a> |
                        <a href='festa.php?idCliente=$user_data[idCliente]' title='Cad-festa'>Cadastra Festa</a> |
                        <a href='editarFesta.php?idCliente=$user_data[idCliente]' title='edit-festa'>Editar Festa</a> |
                        <a href='deleteFesta.php?idCliente=$user_data[idCliente]' title='delete-festa'>Deletar Festa</a> |
                        <a href='produto.php?idCliente=$user_data[idCliente]' title='Cad-comida'>Cadastra Comida</a> |
                        <a href='editarproduto.php?idCliente=$user_data[idCliente]' title='edit-comida'>Editar Comida</a> |
                        <a href='deleteproduto.php?idCliente=$user_data[idCliente]' title='delete-comida'>Deletar Comida</a> |
                        <a href='pedido.php?idCliente=$user_data[idCliente]' title='Cad-Pedido'>Finalizar Pedido</a> |
                        <a href='editarpedido.php?idCliente=$user_data[idCliente]' title='editar-pedido'>Editar Pedido</a> |
                        <a href='deletepedido.php?idCliente=$user_data[idCliente]' title='delete-pedido'>Deletar Pedido</a> |
                        </td>";
                        echo "</tr>";
                        
                    }
                    ?>


    </table>
    <div class="links">
    <a href="gerenciarfesta.php" class="link">Gerenciar Festa
    <a href="gerenciarproduto.php" class="link">Gerenciar Produto
    <a href="gerenciarpedido.php" class="link">Gerenciar Pedido

    </div>
</body>
</html>
