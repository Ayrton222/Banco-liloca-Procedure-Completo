<?php

    if(!empty($_GET['idCliente']))
    {
        include_once('config.php');

        $id = $_GET['idCliente'];

        $sqlDelete = "CALL delete_festa($id)";

        $result = $conexao->query($sqlDelete);

    header('Location: gerenciarFesta.php');
    }


?>