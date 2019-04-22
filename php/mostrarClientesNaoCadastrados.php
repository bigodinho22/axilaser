<?php 
    require "conexao.php";
    $query2 = "select nome, email, telefone, situacao from clientesformulario order by `nome` asc";
            
    $resultado2 = $conexao->query($query2);
    $situacao= "";
    if($resultado2->num_rows>0){ 
        while($registro2 = $resultado2->fetch_assoc()){
            if($registro2["situacao"]==1){
                $situacao="Apto";
            }
            if($registro2["situacao"]==2){
                $situacao="Avaliação";
            }
            if($registro2["situacao"]==3){
                $situacao="Não-apto";
            }
            echo 
            "<tr>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro2["nome"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro2["email"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro2["telefone"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$situacao."</td>
            </tr>";
            $situacao="";
        };
    }
?>