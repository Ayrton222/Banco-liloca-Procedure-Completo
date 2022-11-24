<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['Cliente_idCliente'];
        $boloC = $_POST['boloC'];
        $quantidadeB = $_POST['quant_chocolate'];
        $salgado = $_POST['coxinha'];
        $quantidadeS = $_POST['quant_coxinha'];
        $refrigerante = $_POST['coca'];
        $quantidadeR = $_POST['quant_coca'];
        $valor_unit = $_POST['valor_unit'];
        $valor_unitS = $_POST['valor_unitS'];
        $valor_unitR = $_POST['valor_unitR'];

        $sqlInsert = "CALL editar_produto('$id','$boloC','$quantidadeB','$salgado','$quantidadeS','$refrigerante','$quantidadeR','$valor_unit','$valor_unitS','$valor_unitR')";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: gerenciarproduto.php');

?>