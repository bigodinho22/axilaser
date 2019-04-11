<?php
    include "conexao.php";

    $query = "select id_data,DATE_FORMAT(data, '%d/%m/%Y') as data from datas ORDER BY data ASC";

    
    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){
        while($registro = $resultado->fetch_assoc()){
            $query2 = "select agendada,TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_data = ".$registro["id_data"]." ORDER BY horario ASC";
            $resultado2 = $conexao->query($query2);
            $resultado3 = $conexao->query($query2);
            echo 
            "<tr>
                <td style= 'text-align: center; 
                            color: black; 
                            border: 1px solid black; padding: 5px;'>".$registro["data"]."</td>
                
                <td style= 'text-align: center; 
                            color: black; 
                            border: 1px solid black; padding: 5px;' class='tdHorario'> <div class='opcoes'>
                    <a href='./editarHorarios.php'>Editar</a>
                    <a>Excluir</a>
                  </div>";
            while($registroHoras = $resultado2->fetch_assoc()){
                echo $registroHoras["horarioF"]."<br />";
            }
            echo "
                    </td>
                    <td style= 'text-align: center; 
                            color: black; 
                            border: 1px solid black; padding: 5px;'>";
            while($registroHoras2 = $resultado3->fetch_assoc()){
                $agendado=$registroHoras2["agendada"]=="1"?"Reservado":"Disponível";
                echo $agendado."<br />";
            }
            echo "</td>
                    <td style= 'text-align: center; 
                                    color: black; 
                                    border: 1px solid black; padding: 5px;'><a href='cadastroHorarios.php?id_data=".$registro["id_data"]."'>Inserir Horários</a> <br />
                                    <a href='apagarDia.php?id_data=".$registro["id_data"]."'>Apagar Dia</a><br />   
                                    </td></tr>";
        }
    }

?>