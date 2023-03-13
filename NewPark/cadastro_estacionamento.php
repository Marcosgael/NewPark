<?PHP include('PHP/protect.php'); if(!isset($_SESSION)){session_start();} $id_empresa = "";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastrar Estacionamento</title>
</head>
<body>
	<h1>Cadastrar Estacionamento</h1>
	<form action="PHP/cadastrar_estacionamento.php" method="POST" autocomplete="off">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" required><br><br>
		
		<label for="endereco">Endereço:</label>
		<input type="text" id="endereco" name="endereco" required><br><br>
		
		<label for="cep">CEP:</label>
		<input type="text" id="cep" name="cep" required><br><br>
		
		<label for="estado">Estado:</label>
<select id="estado" name="estado" required>
    <option value="">Selecione um estado</option>
    <?php
        $estados = array(
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            'AP' => 'Amapá',
            'AM' => 'Amazonas',
            'BA' => 'Bahia',
            'CE' => 'Ceará',
            'DF' => 'Distrito Federal',
            'ES' => 'Espírito Santo',
            'GO' => 'Goiás',
            'MA' => 'Maranhão',
            'MT' => 'Mato Grosso',
            'MS' => 'Mato Grosso do Sul',
            'MG' => 'Minas Gerais',
            'PA' => 'Pará',
            'PB' => 'Paraíba',
            'PR' => 'Paraná',
            'PE' => 'Pernambuco',
            'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia',
            'RR' => 'Roraima',
            'SC' => 'Santa Catarina',
            'SP' => 'São Paulo',
            'SE' => 'Sergipe',
            'TO' => 'Tocantins'
        );
        foreach ($estados as $sigla => $estado) {
            echo "<option value=\"$sigla\">$estado</option>";
        }
    ?>
</select><br><br>
		
		<label for="cidade">Cidade:</label>
		<input type="text" id="cidade" name="cidade" required><br><br>
		
		<label for="bairro">Bairro:</label>
		<input type="text" id="bairro" name="bairro" required><br><br>
		
		<label for="horario_funcionamento_inicio">Horário de Funcionamento - Início:</label>
		<input type="datetime-local" id="horario_funcionamento_inicio" name="horario_funcionamento_inicio" required><br><br>
		
		<label for="horario_funcionamento_fim">Horário de Funcionamento - Fim:</label>
		<input type="datetime-local" id="horario_funcionamento_fim" name="horario_funcionamento_fim" required><br><br>
		
		<label for="id_empresa">Empresa:</label>
		<select name="id_empresa">
			<?php
				include("PHP/conexao.php");

				$result_empresas = mysqli_query($conexao, "SELECT * FROM EmpresaEstacionamento");

				while ($row_empresas = mysqli_fetch_array($result_empresas)) {
					echo '<option value="' . $row_empresas['id_empresa'] . '">' . $row_empresas['nome'] . '</option>';
				}
			?>
		</select><br><br>
		
		<label for="telefone">Telefone:</label>
		<input type="tel" name="telefone" required><br><br>

		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>
