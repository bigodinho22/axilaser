<?php
	require "conexao.php";
	$nome=$_POST["nomeForm"];
	$email=$_POST["emailForm"];
	$telefone=$_POST["telefoneForm"];
	$fototipo=$_POST["fototipo"]; //9
	$corPelo=$_POST["corPelo"]; // 1: nao, 2:boa
	$roacutan=$_POST["roacutan"]; // 3: nao, 4: exame, 5: boa
	$cancerVitiligo=$_POST["cancerVitiligo"]; // 6: nao, 7: exame, 8: boa

	$queryVerificaEmail = "SELECT email FROM cliente WHERE email = '$email'";  

	$resultado8 = $conexao->query($queryVerificaEmail);

	if($resultado8->num_rows>0){
		echo "<script language='javascript' type='text/javascript'> alert('Esse e-mail já está cadastrado'); window.location.href='../cadastro.php';</script>";
	}else{

		$queryInserirUsuario ="INSERT INTO clientesformulario VALUES (NULL, '$nome', '$email', '$telefone');";

		$resultado9=$conexao->query($queryInserirUsuario);
		if(($fototipo!="VI")&($corPelo==2)&($roacutan==3)&($cancerVitiligo==3)){
			echo "sucesso";
		}else{
			echo "<script language='javascript' type='text/javascript'>
				alert('Ops!!!');
				window.location.href='../erroForm.php?fototipo=$fototipo&corPelo=$corPelo&roacutan=$roacutan&cv=$cancerVitiligo';
			</script>";
		}
	}
?>