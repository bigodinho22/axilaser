<?php 
    require "conexao.php";
    $query2 = "select nome, email, telefone from clientesformulario order by `nome` asc";
            
    $resultado2 = $conexao->query($query2);

    if($resultado2->num_rows>0){ 
        while($registro2 = $resultado2->fetch_assoc()){
            echo 
            "<tr>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro2["nome"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro2["email"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro2["telefone"]."</td>
            </tr>";
        };
    }
?>