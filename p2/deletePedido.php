<?php

    if(!empty($_GET['idCliente']))
    {
        include_once('config.php');

        $id = $_GET['idCliente'];

        $sqlDelete = "CALL delete_pedido($id)";

        $result = $conexao->query($sqlDelete);


    header('Location: gerenciarPedido.php');
    }

?>