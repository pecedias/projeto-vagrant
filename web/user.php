<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
</head>
	<body>

		<?php

			require_once("conect.php");

			//echo "Conexão efetuada com sucesso!";

			// Criar a instrução em SQL
			$query = "SELECT id, nome, email, nascimento FROM aluno";

			// Executar o comando SQL
			$dados = mysqli_query($conexao, $query);

			// Transformar os resultados da consulta em um array
			$lista = mysqli_fetch_assoc($dados);

			$total_res = mysqli_num_rows($dados);

		echo '<div class="container">';
		echo '<div class="row">';
		echo '<h3 class="padding-bot" align="center"> Todos os alunos: ' . $total_res. '</h3>';
		echo '<table class="table table-striped table-bordered table-hover table-condensed">';

		echo '<thead>
			<tr>
			<th>Número de matrícula</th>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Data de nascimento</th>
			</tr>
			</thead>';

		while($lista=mysqli_fetch_assoc($dados)){

	  echo "<tbody><tr><td>" . $lista['id'] . "</td><td>" . $lista['nome'] . "</td><td>" . $lista['email'] . "</td><td>" . $lista['nascimento'] . "</td></tr></tbody>";

		 }

		 echo '</table>'; 
		 echo '</div>';
		 echo '</div>';		
		?>

	</body>
</html>
