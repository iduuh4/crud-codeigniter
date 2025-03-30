<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - EDUARDO</title>
	
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="d-flex min-vh-100">
	<div class="container d-flex flex-column justify-content-center align-items-center">
		<div class="d-flex align-self-center">
			<div class="text-center card p-4">
				<h2>Área de Login </h2>
					<hr>
				<form class="form" action="<?= base_url('index.php/autenticacao/autenticar') ?>" method="post">
					<div class="mb-3">
						<label for="usuario" class="form-label">Usuário</label>
						<div class="input-wrapper">
							<i class="fas fa-sign-in"></i>
							<input type="text" class="form-control" id="usuario" placeholder="Digite seu usuário" required>
						</div>
					</div>
					<div class="mb-3">
						<label for="senha" class="form-label">Senha</label>
						<div class="input-wrapper">
							<i class="fas fa-key"></i>
						<input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
						</div>
					</div>
					<button type="submit" class="btn btn-success">Entrar</button>
					<hr>
					<p>Ainda não tem cadastro? <a href="<?= base_url('index.php/autenticacao/cadastro/') ?>">Criar conta</a></p>
				</form>
			</div>
		</div>
	</div>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
