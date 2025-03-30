<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD - Básico</title>
	
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body class="d-flex min-vh-100">
	<div class="container d-flex flex-column justify-content-center align-items-center">
		<div class="d-flex align-self-center">
			<div class="text-center card p-4">
					<h1> Bem vindo ...</h1> 
					<br>
					<a href="<?= base_url('index.php/estado/cadastrar') ?>" class="btn btn-primary">Cadastar</a><br>
					<hr>
					<table class="table">
					<div class="text-center">
						<h2>Lista de Cidades/UF</h2>
					</div>
					<thead>
						<tr>
						<th scope="col">Cidade</th>
						<th scope="col">Sigla</th>
						<th scope="col">Opções</th>
						
						</tr>
					</thead>
					<tbody>
						<?php foreach($tabela as $linha): ?>
							<tr>
								<td><?= $linha->cidade ?></td>
								<td><?= $linha->sigla ?></td>
								<td>
									<a href="<?= base_url('index.php/estado/editar/'.$linha->id) ?>" class="btn btn-primary">Editar</a>
									<a href="<?= base_url('index.php/estado/excluir/'.$linha->id) ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este registro?')">Excluir</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<a href="<?= base_url('index.php/autenticacao/login/') ?>" class="btn btn-danger">Sair da conta</a>			</div>
			</div>
		</div>
	</div>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
