<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Histórico de Reservas</title>
</head>
<body>
	<h1>Histórico de Reservas</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Estacionamento</th>
				<th>Data de Reserva</th>
				<th>Hora de Reserva</th>
				<th>Placa do Carro</th>
			</tr>
		</thead>
		<tbody>
			<?php include 'PHP/pesquisar_historico_reserva.php'; ?>
		</tbody>
	</table>
</body>
</html>