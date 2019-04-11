<?php 

    include "conexao.php";

    $query = "select id_horario_data,regiao,id_cliente from agenda ORDER BY data ASC";
    
    $resultado = $conexao->query($query);

    if($resultado->num_rows>0){
        while($registro = $resultado->fetch_assoc()){
            $queryIdData_Hora = "select id_data, TIME_FORMAT(horario, '%H:%i') as horarioF from datahora where id_horario_data=".$registro["id_horario_data"];
            $querySelectNomeU = "select nome from cliente where id_cliente ='".$registro['id_cliente']."'";
            $resultadoNome = $conexao->query($querySelectNomeU);
            while($nomeReg = $resultadoNome->fetch_assoc()){
                echo 
                "<tr>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$nomeReg["nome"]."</td>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro["data"]."</td>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro["horario"]."</td>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'>".$registro["regiao"]."</td>
                    <td style= 'text-align: center; 
                            border: 1px solid black;'><input type='checkbox' value='Compareceu'></td>
                </tr>";
            };
        };
    };



