
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Festa</title>
</head>
<body>
<?php
    include_once('config.php');
 $sql = "CALL consulta_festa(@p0)";
 $result = $conexao->query($sql);
    ?>

<table border="1">

     <tr>
         <td>Código</td>
         <td>Código Cliente</td>
         <td>Nome do aniversariante</td>
         <td>Idade</td>
         <td>Endereço</td>
         <td>Tema</td>
         <td>Cores</td>
     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idFesta']."</td>";
                        echo "<td>".$user_data['Cliente_idCliente']."</td>";
                        echo "<td>".$user_data['aniversariante']."</td>";
                        echo "<td>".$user_data['idade']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['tema']."</td>";
                        echo "<td>".$user_data['cores']."</td>";
                        echo "</tr>";
                        
                        
                    }
                    ?>


    </table>

</body>
</html>