<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Reservar Vaga no Estacionamento</title>
</head>
<body>
	<h1>Reservar Vaga no Estacionamento</h1>
	<form action="PHP/reservar_vaga.php" method="POST">
		<label for="estacionamento">Estacionamento:</label>
		<select id="estacionamento" name="estacionamento" required>
			<option value="">Selecione um estacionamento</option>
			<option value="1">Estacionamento A</option>
			<option value="2">Estacionamento B</option>
			<option value="3">Estacionamento C</option>
		</select><br><br>
	<label for="data">Data:</label>
	<input type="date" id="data" name="data" required><br><br>
	
	<label for="hora_inicio">Hora de início:</label>
	<input type="time" id="hora_inicio" name="hora_inicio" required><br><br>
	
	<label for="hora_fim">Hora de fim:</label>
	<input type="time" id="hora_fim" name="hora_fim" required><br><br>
	
	<label for="tipo_veiculo">Tipo de veículo:</label>
	<select id="tipo_veiculo" name="tipo_veiculo" required>
		<option value="">Selecione um tipo de veículo</option>
		<option value="carro">Carro</option>
		<option value="moto">Moto</option>
		<option value="caminhao">Caminhão</option>
	</select><br><br>
	
	<label for="placa">Placa:</label>
	<input type="text" id="placa" name="placa" required><br><br>
	
	<input type="submit" value="Reservar">
	<input type="reset" value="Limpar">
</form>
</body>
</html>