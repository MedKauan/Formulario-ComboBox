<?php 
    include_once("config.php");
    $nome = $_POST['nome'];
	$ra = $_POST['ra'];
    $email = $_POST['email'];
	$select_turmas = $_POST['select_turmas'];
	
	
	$result_usuario = "INSERT INTO alunos (nome, ra, email, turma) VALUES ('$nome','$ra', '$email', '$select_turmas')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>
