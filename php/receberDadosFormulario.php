<?php
	require "conexao.php";
	$nome=$_POST["nomeForm"];
	$idade=$_POST["idadeForm"];
	$email=$_POST["emailForm"];
	$telefone=$_POST["telefoneForm"];
	$fototipo=$_POST["fototipo"]; //9
	$corPelo=$_POST["corPelo"]; // 1: nao, 2:boa
	$roacutan=$_POST["roacutan"]; // 3: nao, 4: exame, 5: boa
	$cancerVitiligo=$_POST["cancerVitiligo"]; // 6: nao, 7: exame, 8: boa
	$pelo=$_POST["pelo"];

	$queryVerificaEmail = "SELECT email FROM clientesformulario WHERE email = '$email'";  

	$resultado8 = $conexao->query($queryVerificaEmail);

	if($resultado8->num_rows>0){

		echo "<script language='javascript' type='text/javascript'> alert('Esse e-mail já realizou uma pré-avaliação!'); window.location.href='../formulario.php';</script>";

	}else{
		$queryInserirUsuario ="INSERT INTO clientesformulario VALUES (NULL, '$nome', $idade, '$email', '$telefone', '$fototipo', '$corPelo', '$roacutan', '$cancerVitiligo', '$pelo');";

		$resultado9=$conexao->query($queryInserirUsuario);
		if(($fototipo!="VI")&($corPelo==2)&($roacutan==3)&($cancerVitiligo==3)&($pelo!=1)&($pelo!=4)){
			echo "<script>
				window.location.href='../positivo.php?nome=$nome';
			</script>";
		}else{
			echo "<script language='javascript' type='text/javascript'>
				window.location.href='../erroForm.php?fototipo=$fototipo&corPelo=$corPelo&roacutan=$roacutan&cv=$cancerVitiligo&pelo=$pelo';
			</script>";
		}
	}
	
?>