<?php
    // isset -> serve para saber se uma variável está definida
    include('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['idCliente'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];

        $sqlInsert = "CALL editar_cliente('$id','$nome','$telefone','$endereco','$cpf')";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location:gerenciar.php');

?>