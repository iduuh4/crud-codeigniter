<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro - EDUARDO</title>
	
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="d-flex min-vh-100">
	<div class="container d-flex flex-column justify-content-center align-items-center">
		<div class="d-flex align-self-center">
		<?php if($this->session->flashdata("sucesso")) : ?>
				<p><?= $this->session->flashdata("sucesso")  ?></p>
				<?php endif ?>
		<?php if($this->session->flashdata("error")) : ?>
			<p><?= $this->session->flashdata("error")  ?></p>
		<?php endif ?>
			<div class="text-center card p-4">
				<h2>Cadastro de Usuário</h2>
				<hr>
				<form class="form" action="<?= site_url('autenticar/cadastro') ?>" method="post">
					 <!-- Token CSRF Necessário -->
					 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
			 
				<div class="mb-3">
						<label for="usuario" class="form-label">Criar Usuário</label>
						<div class="input-wrapper">
							<i class="fas fa-sign-in"></i>
							<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite seu usuário" required>
						</div>
					</div>
					<div class="mb-3">
						<label for="senha" class="form-label">Criar Senha</label>
						<div class="input-wrapper">
							<i class="fas fa-key"></i>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
						</div>
					</div>
					<button type="submit" class="btn btn-success">Criar Conta</button>
					<hr>
					<p>Já tem uma conta ? <a href="<?= site_url('autenticar/login') ?>">Fazer login</a></p>
				</form>
			</div>
		</div>
	</div>

<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
