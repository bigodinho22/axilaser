<?php 
    require "conexao.php";
    $query = "select nome, email, telefone, idade from cliente order by `nome` asc";
            
    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){ 
        while($registro = $resultado->fetch_assoc()){
            echo 
            "<tr>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro["nome"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro["email"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro["idade"]."</td>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>".$registro["telefone"]."</td>
            </tr>";
        };
    }
?>