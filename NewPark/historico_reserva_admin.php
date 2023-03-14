<!DOCTYPE html>
<html>
<head>
	<title>Minhas Reservas</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even){background-color: #f2f2f2}
		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Minhas Reservas</h1>
	<form method="GET">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome">
		<button type="submit">Filtrar</button>
	</form>
	<?php
		include_once("PHP/conexao.php");
		if(!isset($_SESSION)){session_start();}
		if(isset($_GET['nome'])) {
			$nome = $_GET['nome'];
			$sql = "SELECT * FROM Reserva WHERE id_usuario = ? AND nome LIKE '%$nome%'";
			$stmt = mysqli_prepare($conexao, $sql);
			mysqli_stmt_bind_param($stmt, "is", $_SESSION['id_usuario'], $nome);
		} else {
			$sql = "SELECT * FROM Reserva WHERE id_usuario = ?";
			$stmt = mysqli_prepare($conexao, $sql);
			mysqli_stmt_bind_param($stmt, "i", $_SESSION['id_usuario']);
		}
		mysqli_stmt_execute($stmt);
		$reservas = mysqli_stmt_get_result($stmt);
		if(mysqli_num_rows($reservas) > 0) {
			echo "<table>";
			echo "<tr><th>ID</th><th>Data de Criação</th><th>Data de Início</th><th>Data de Fim</th><th>Preço</th><th>ID do Estacionamento</th><th>ID do Carro</th></tr>";
			while($reserva = mysqli_fetch_array($reservas)) {
				echo "<tr>";
				echo "<td>".$reserva['id_reserva']."</td>";
				echo "<td>".$reserva['data_criacao']."</td>";
				echo "<td>".$reserva['data_inicio']."</td>";
				echo "<td>".$reserva['data_fim']."</td>";
				echo "<td>".$reserva['preco']."</td>";
				echo "<td>".$reserva['id_estacionamento']."</td>";
				echo "<td>".$reserva['id_carro']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "Você não tem reservas.";
		}
		mysqli_close($conexao); 
	?>
</body>
</html>
