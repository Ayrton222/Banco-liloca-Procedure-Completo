
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    include_once('config.php');
 $sql = "CALL consulta_pedido(@p0)";
 $result = $conexao->query($sql);
    ?>

<table border="1">

     <tr>
         <td>Código</td>
         <td>Data do Pedido</td>
         <td>Data da Festa</td>
         <td>Prazo</td>
         <td>Data da Entrega</td>
         <td>Tipo de Entrega</td>
         <td>Frete</td>
         <td>Sinal</td>
         <td>Restante</td>
     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idPedido']."</td>";
                        echo "<td>".$user_data['data_pedido']."</td>";
                        echo "<td>".$user_data['data_festa']."</td>";
                        echo "<td>".$user_data['prazo']."</td>";
                        echo "<td>".$user_data['data_entrega']."</td>";
                        echo "<td>".$user_data['tipo_entrega']."</td>";
                        echo "<td>".$user_data['frete']."</td>";
                        echo "<td>".$user_data['sinal']."</td>";
                        echo "<td>".$user_data['restante']."</td>";
                        echo "</tr>";
                        
                    }
                    ?>


    </table>
</body>
</html>
