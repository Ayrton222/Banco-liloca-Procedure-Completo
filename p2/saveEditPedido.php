<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['Cliente_idCliente'];
        $dataPedido = $_POST['data_pedido'];
        $dataFesta = $_POST['data_festa'];
        $prazo = $_POST['prazo'];
        $dataEntrega = $_POST['data_entrega'];
        $tipoEntrega = $_POST['tipo_entrega'];
        $frete = $_POST['frete'];
        $sinal = $_POST['sinal'];
        $restante = $_POST['restante'];


        $sqlInsert = "CALL editar_pedido('$id','$dataPedido','$dataFesta','$prazo','$dataEntrega','$tipoEntrega','$frete','$sinal','$restante')";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: gerenciarPedido.php');

?>