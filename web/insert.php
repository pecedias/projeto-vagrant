<?php

	require_once("conect.php");

	$id_aluno = $_POST["id_aluno"];
	$nome_aluno = $_POST["nome_aluno"];
	$email_aluno = $_POST["email_aluno"];
	$nasc_aluno = $_POST["nasc_aluno"];

	$stmt_id = mysqli_real_escape_string($conexao, $id_aluno);
	$stmt_nome = mysqli_real_escape_string($conexao, $nome_aluno);
	$stmt_email = mysqli_real_escape_string($conexao, $email_aluno);
	$stmt_nasc = mysqli_real_escape_string($conexao, $nasc_aluno);

	// Cria uma instrução em SQL
	$query_sql = sprintf("INSERT INTO aluno(id,nome,email,nascimento) VALUES($stmt_id, '$stmt_nome', '$stmt_email', '$stmt_nasc')");

	//echo $query_sql;
	mysqli_query($conexao, $query_sql);

?>

Dados cadastrados com sucesso:
<ul>
	<li>ID: <? echo $id_aluno; ?> </li>
	<li>Nome: <? echo $nome_aluno; ?> </li>
	<li>E-mail: <? echo $email_aluno; ?> </li>
	<li>Data de nascimento: <? echo $nasc_aluno; ?> </li>
</ul>

<?php

	$url = 'http://192.168.33.10/index.php';
	echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

?>
