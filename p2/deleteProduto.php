<?php

    if(!empty($_GET['idCliente']))
    {
        include_once('config.php');

        $id = $_GET['idCliente'];

        $sqlDelete = "CALL delete_produto($id)";

        $result = $conexao->query($sqlDelete);

        
    header('Location: gerenciarProduto.php');
    }
?>