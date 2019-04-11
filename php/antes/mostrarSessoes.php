<?php 

    include "conexao.php";

    $id = $_SESSION["id"];

    $query = "select regiao, horario, DATE_FORMAT(data, '%d/%m/%Y') as data from agenda where id_cliente = ".$id."";
    
    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){
        while($registro = $resultado->fetch_assoc()){
            echo 
            "<tr>
                <td class='tabelaSessoesCelula'>".$registro["data"]."</td>
                <td class='tabelaSessoesCelula'>".$registro["horario"]."</td>
                <td class='tabelaSessoesCelula'>".$registro["regiao"]."</td>
            </tr>";
        }
    }



