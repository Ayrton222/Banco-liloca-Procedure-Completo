<?php
    // isset -> serve para saber se uma variável está definida
    include('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['Cliente_idCliente'];
        $aniversariante = $_POST['aniversariante'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];
        $tema = $_POST['tema'];
        $cores = $_POST['cores'];

        $sqlInsert = "CALL editar_festa('$id','$aniversariante','$idade','$endereco','$tema','$cores')";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location:gerenciarFesta.php');

?>