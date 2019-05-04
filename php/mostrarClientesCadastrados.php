<?php 
    require "conexao.php";
    $query = "select nome, email, telefone, idade, id_cliente from cliente order by `nome` asc";
            
    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){ 
        while($registro = $resultado->fetch_assoc()){
            echo 
            "<tr>
                <td style= 'text-align: center; 
                        border: 1px solid black;'>
                        <div style='margin-left: 12%; margin-bottom: 3%;' class='opcoesDiv' id='opcoesCli".$registro["id_cliente"]."' onMouseOver='mouseOver(".$registro["id_cliente"].")' onMouseOut='mouseOut(".$registro["id_cliente"].")'>
                            <a href='confirma.php?id_clienteC=".$registro["id_cliente"]."'>Apagar</a>
                        </div>
                        <span  class='spanHorario' onMouseOver='mouseOver(".$registro["id_cliente"].")'
                        onMouseOut='mouseOut(".$registro["id_cliente"].")' style='display:inline'>".$registro["nome"]."</span></td>
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