<?php
include_once("conect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projeto Vagrant</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
</head>
	<body>	
		<div class="container">
		<div class="header" align="center">
			<a href="index.php">
				<img src="img/vagrant.svg" class="img-responsive img-logo"/>
			</a>
		</div>
		</div>

		<section id="form">
			<div class="container">
			<div class="page-header" align="center">
			<h1>Projeto Vagrant</h1>
			</div>
				<div class="row">

					<div class="col-md-8">
					<h3>Cadastro</h3>

					<form action="insert.php" method="post">

						<div class="form-group">
							<label for="numero">Número de matrícula</label>
							<input class="form-control" type="number" name="id_aluno" id="numero" placeholder="Digite seu número de matrícula">
						</div>

						<div class="form-group">
							<label for="nome">Nome</label>
							<input class="form-control" type="text" name="nome_aluno" id="nome" placeholder="Digite seu nome">
						</div>

						<div class="form-group">
							<label for="email">E-mail</label>
							<input class="form-control" type="email" name="email_aluno" id="email" placeholder="seuemail@exemplo.com">
						</div>

						<div class="form-group">
							<label for="data">Data de nascimento</label>
							<input class="form-control" type="date" name="nasc_aluno" id="data">
						</div>

						<button type="submit" class="btn btn-primary btn-block">Cadastrar</button>

					</form>

					</div>

					<div class="col-md-4">
					<h3>Procurar aluno</h3>
					
						<form method="POST" action="">

						<div class="form-group">
						<label>Número de matrícula </label>
						<input class="form-control" type="number" name="buscar_id" placeholder="Digite o número de matrícula do aluno">
						</div>

						<button type="submit" name="SendPesqUser" class="btn btn-success btn-block">Procurar</button>

						</form>

					<?php

					if(isset($_POST['SendPesqUser'])){
					echo '<div class="info-aluno">';
					$buscar_id = $_POST['buscar_id'];
					$query = "SELECT * FROM aluno WHERE id = '".$buscar_id."'";
					if ($result = $conexao->query($query)) {
						while ($lista = $result->fetch_assoc()) {
								echo "<b>Número de matrícula:</b> " . $lista['id'] . "<br>";
								echo "<b>Nome:</b> " . $lista['nome'] . "<br>";
								echo "<b>E-mail:</b> " . $lista['email'] . "<br>";
								echo "<b>Data de nascimento:</b> " . $lista['nascimento'] . "<br>";
								echo "<button type=\"submit\" class=\"btn btn-danger btn-block right\"><a href='remove.php?id=" . $lista['id'] . "'>EXCLUIR ALUNO</a></button>";
						} if($result->num_rows == 0) {

						echo "<b>Nenhum aluno encontrado!</b>";
					}
					} 
					}

					echo '</div>';

					?>
					

					</div>

				</div>
			</div>
		</section>

		<section id="user">
			<?php
				require_once("user.php");
			?>
		</section>

		<footer>
			<h6>Desenvolvido por: <a href="https://github.com/pecedias" target="_blank">Paulo Dias</a></h6>
		</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
