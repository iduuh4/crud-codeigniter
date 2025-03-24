<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD - Básico</title>
	
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('style.css'); ?>">
</head>
<body>
	<div class="container d-flex justify-content-center">
		<div class="align-items-center">
		<div class="text-center">
			<h1><?= $titulo ?></h1> 
			<br>
			<a href="<?= base_url('index.php/estado/cadastrar') ?>" class="btn btn-primary">Cadastar</a><br><br>
		</div>
	<table class="table">
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
	</div>
</div>


<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
