
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
    <title>Festa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/festa.css">
</head>
<body>
    
    <div class="titulo">
        Cadastro de Festa
    </div>

    <div class="conteudo">
        <div class="form">
            <form action="gerenciar.php" method="post">
    
            
            <label class="aniversariante">Aniversariante:</label>
            <input type="text" name="aniversariante" id="aniversariante">

          
            <label class="idade">Idade:</label>
            <input type="text" name="idade" id="idade">

            <label class="endereco">Endereço da festa:</label>
            <input type="text" name="endereco" id="end">

            <label class="tema">Tema:</label>
            <input type="text" name="tema" id="tema">

            <label class="cor">Cores:</label>
            <input type="text" name="cores" id="cor">

            <input type="hidden" name="Cliente_idCliente" id="aniversariante" value =<?php echo $a ?>>
            <input type="submit" name="submitF" id="submit" class="button"></input>
            
            </form>
        </div>
    </div>
</body>
</html>