<?php
	require "conexao.php";
	$nome=$_POST["nomeForm"];
	$email=$_POST["emailForm"];
	$telefone=$_POST["telefoneForm"];
	$fototipo=$_POST["fototipo"]; //9
	$corPelo=$_POST["corPelo"]; // 1: nao, 2:boa
	$roacutan=$_POST["roacutan"]; // 3: nao, 4: exame, 5: boa
	$cancerVitiligo=$_POST["cancerVitiligo"]; // 6: nao, 7: exame, 8: boa
	$pelo=$_POST["pelo"];
	$queryInserirUsuario ="INSERT INTO clientesformulario VALUES (NULL, '$nome', '$email', '$telefone');";

	$resultado9=$conexao->query($queryInserirUsuario);
	if(($fototipo!="VI")&($corPelo==2)&($roacutan==3)&($cancerVitiligo==3)&$pelo!=1){
		echo "<script>
			window.location.href='../positivo.php?nome=$nome';
		</script>";
	}else{
		echo "<script language='javascript' type='text/javascript'>
			window.location.href='../erroForm.php?fototipo=$fototipo&corPelo=$corPelo&roacutan=$roacutan&cv=$cancerVitiligo&pelo=$pelo';
		</script>";
	}
?>