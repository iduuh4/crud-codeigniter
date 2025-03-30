<div class="container d-flex justify-content-center">
	<div class="align-items-center">
		<h1><?= $titulo ?></h1>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

		<?php echo form_open('index.php/estado/salvar'); ?>

		<div class="mb-3">
			<label for="sigla" class="form-label">Estado</label>
			<select id="sigla" name="sigla" class="form-select" required>
				<option value="">Selecione</option>
				<option value="AC">Acre</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceará</option>
				<option value="DF">Distrito Federal</option>
				<option value="ES">Espirito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MT">Mato Grosso</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="cidade" class="form-label">Cidade</label>
			<input type="text" name="cidade" class="form-control" id="cidade" placeholder="Digite o nome da cidade" required>
		</div>

		<button type="submit" class="btn btn-primary">Cadastrar</button>
		<a href="<?= base_url('index.php') ?>" class="btn btn-danger">Cancelar</a>
		</form>
	</div>
</div>
