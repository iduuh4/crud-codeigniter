<div class="container d-flex justify-content-center">
    <div class="align-items-center">
        <h1><?= $titulo ?></h1>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

        <?php echo form_open('index.php/estado/editaralteracao'); ?>
        
        <!-- campo hidden para enviar o ID -->
        <input type="hidden" name="id" value="<?= $tabela[0]->id ?>">

        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <!-- preenche o value com os valores do db, varivel $tabela que recebeu do model -->
            <input type="text" name="cidade" class="form-control" id="cidade" 
                   value="<?= $tabela[0]->cidade ?>" placeholder="Digite o nome da cidade" required>
        </div>

        <div class="mb-3">
            <label for="sigla" class="form-label">Sigla</label>
            <select id="sigla" name="sigla" class="form-select" required>
				<option value="">Selecione</option>
				<option value="AC" <?= $tabela[0]->sigla == 'AC' ? 'selected' : '' ?>>Acre</option>
				<option value="AL" <?= $tabela[0]->sigla == 'AL' ? 'selected' : '' ?>>Alagoas</option>
				<option value="AP" <?= $tabela[0]->sigla == 'AP' ? 'selected' : '' ?>>Amapá</option>
				<option value="AM" <?= $tabela[0]->sigla == 'AM' ? 'selected' : '' ?>>Amazonas</option>
				<option value="BA" <?= $tabela[0]->sigla == 'BA' ? 'selected' : '' ?>>Bahia</option>
				<option value="CE" <?= $tabela[0]->sigla == 'CE' ? 'selected' : '' ?>>Ceará</option>
				<option value="DF" <?= $tabela[0]->sigla == 'DF' ? 'selected' : '' ?>>Distrito Federal</option>
				<option value="ES" <?= $tabela[0]->sigla == 'ES' ? 'selected' : '' ?>>Espírito Santo</option>
				<option value="GO" <?= $tabela[0]->sigla == 'GO' ? 'selected' : '' ?>>Goiás</option>
				<option value="MA" <?= $tabela[0]->sigla == 'MA' ? 'selected' : '' ?>>Maranhão</option>
				<option value="MT" <?= $tabela[0]->sigla == 'MT' ? 'selected' : '' ?>>Mato Grosso</option>
				<option value="MS" <?= $tabela[0]->sigla == 'MS' ? 'selected' : '' ?>>Mato Grosso do Sul</option>
				<option value="MG" <?= $tabela[0]->sigla == 'MG' ? 'selected' : '' ?>>Minas Gerais</option>
				<option value="PA" <?= $tabela[0]->sigla == 'PA' ? 'selected' : '' ?>>Pará</option>
				<option value="PB" <?= $tabela[0]->sigla == 'PB' ? 'selected' : '' ?>>Paraíba</option>
				<option value="PR" <?= $tabela[0]->sigla == 'PR' ? 'selected' : '' ?>>Paraná</option>
				<option value="PE" <?= $tabela[0]->sigla == 'PE' ? 'selected' : '' ?>>Pernambuco</option>
				<option value="PI" <?= $tabela[0]->sigla == 'PI' ? 'selected' : '' ?>>Piauí</option>
				<option value="RJ" <?= $tabela[0]->sigla == 'RJ' ? 'selected' : '' ?>>Rio de Janeiro</option>
				<option value="RN" <?= $tabela[0]->sigla == 'RN' ? 'selected' : '' ?>>Rio Grande do Norte</option>
				<option value="RS" <?= $tabela[0]->sigla == 'RS' ? 'selected' : '' ?>>Rio Grande do Sul</option>
				<option value="RO" <?= $tabela[0]->sigla == 'RO' ? 'selected' : '' ?>>Rondônia</option>
				<option value="RR" <?= $tabela[0]->sigla == 'RR' ? 'selected' : '' ?>>Roraima</option>
				<option value="SC" <?= $tabela[0]->sigla == 'SC' ? 'selected' : '' ?>>Santa Catarina</option>
				<option value="SP" <?= $tabela[0]->sigla == 'SP' ? 'selected' : '' ?>>São Paulo</option>
				<option value="SE" <?= $tabela[0]->sigla == 'SE' ? 'selected' : '' ?>>Sergipe</option>
				<option value="TO" <?= $tabela[0]->sigla == 'TO' ? 'selected' : '' ?>>Tocantins</option>
			</select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="<?= base_url('index.php') ?>" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</div>
