<?php 

    include "conexao.php";

    $query = "select id_agenda,id_horario_data,regiao,id_cliente,compareceu from agenda";
    
    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){
        echo "<script>
            function checkBox(i,j){
                window.location.href='indexAdmin.php?id_agenda='+i+'&alteracao='+j;
            }
        </script>";
        while($registro = $resultado->fetch_assoc()){
            $queryIdData_Hora = "select id_data, TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_horario_data=".$registro["id_horario_data"];
            $resultadoIdData_Hora = $conexao->query($queryIdData_Hora);
            while($registroIdData_Horario = $resultadoIdData_Hora->fetch_assoc()){
                $horario = $registroIdData_Horario["horarioF"];
                $id_data = $registroIdData_Horario["id_data"];
            }
            $queryData= "select DATE_FORMAT(data, '%d/%m/%Y') as data from datas where id_data=".$id_data." ORDER BY data ASC";
            $compareceu=$registro["compareceu"]==1?'checked':'';
            $alteracao=$registro["compareceu"]==1?0:1;
            $resultadoData = $conexao->query($queryData);
            while($registroData = $resultadoData->fetch_assoc()){
                $querySelectNomeU = "select nome from cliente where id_cliente ='".$registro['id_cliente']."'";
                $resultadoNome = $conexao->query($querySelectNomeU);
                while($nomeReg = $resultadoNome->fetch_assoc()){
                    echo 
                    "<tr>
                        <td style= 'text-align: center; 
                                border: 1px solid black;'>".$nomeReg["nome"]."</td>
                        <td style= 'text-align: center; 
                                border: 1px solid black;'>".$registroData["data"]."</td>
                        <td style= 'text-align: center; 
                                border: 1px solid black;'>".$horario."</td>
                        <td style= 'text-align: center; 
                                border: 1px solid black;'>".$registro["regiao"]."</td>
                        <td style= 'text-align: center; 
                                border: 1px solid black;'><input type='checkbox' onclick='checkBox(".$registro['id_agenda'].", ".$alteracao.")'".$compareceu."></td>
                    </tr>";
            };
            }
        };
    };



